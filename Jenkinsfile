pipeline {
    agent any

    environment {
        IMAGE_NAME = "sicei-app"
        CONTAINER_NAME = "sicei"
        NGINX_NAME = "sicei-nginx"
        TAG = "${BUILD_ID}"
    }

    stages {

        stage('Clonar repo') {
            steps {
                git branch: 'main', url: 'https://github.com/sajeme/Framework-Dockerfile.git'
            }
        }

        stage('Composer install (host)') {
            steps {
                bat 'docker run --rm -v %CD%:/app -w /app composer install --no-dev --optimize-autoloader'
            }
        }
        stage('Crear archivo SQLite') {
            steps {
                bat "if not exist database\\database.sqlite type nul > database\\database.sqlite"
            }
        }
        stage('Migraciones Laravel') {
            steps {
                bat "docker exec %CONTAINER_NAME% php artisan migrate --force"
            }
        }


        stage('Construir imagen Docker') {
            steps {
                echo "Construyendo imagen Docker con tag: sicei-app:${BUILD_ID}"
                bat "docker build -t sicei-app:%BUILD_ID% ."
            }
        }


        stage('Detener contenedores anteriores') {
            steps {
                bat """
                docker stop %CONTAINER_NAME% || exit 0
                docker rm %CONTAINER_NAME% || exit 0
                docker stop %NGINX_NAME% || exit 0
                docker rm %NGINX_NAME% || exit 0
                """
            }
        }

        stage('Ejecutar contenedor app PHPFPM') {
            steps {
                bat "docker run -d --name %CONTAINER_NAME% -p 9000:9000 -v %CD%:/var/www/html %IMAGE_NAME%:%TAG%"
            }
        }

        stage('Ejecutar contenedor nginx') {
            steps {
                bat """
                docker run -d --name %NGINX_NAME% -p 8000:80 ^
                    -v %CD%:/var/www/html ^
                    -v %CD%\\nginx.conf:/etc/nginx/conf.d/default.conf ^
                    --link %CONTAINER_NAME%:app nginx:alpine
                """
            }
        }

        stage('Configurar Laravel (.env, key, permisos)') {
            steps {
                bat """
                docker exec %CONTAINER_NAME% cp .env.example .env
                docker exec %CONTAINER_NAME% php artisan key:generate
                docker exec %CONTAINER_NAME% chmod -R 775 storage bootstrap/cache
                docker exec %CONTAINER_NAME% chown -R www-data:www-data storage bootstrap/cache
                """
            }
        }
    }
}
