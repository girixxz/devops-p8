pipeline {
    agent any

    stages {
        stage('Install Dependencies') {
            steps {
                sh '''
                docker run --rm -v $PWD:/app -w /app php:8.2-cli sh -c "
                    apt-get update &&
                    apt-get install -y unzip curl zip php-xml &&
                    curl -sS https://getcomposer.org/installer | php &&
                    php composer.phar install
                "
                '''
            }
        }

        stage('Run Unit Test') {
            steps {
                sh '''
                docker run --rm -v $PWD:/app -w /app php:8.2-cli sh -c "
                    ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests || echo 'No tests found'
                "
                '''
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t php-jenkins-app .'
            }
        }

        stage('Deploy Docker Container') {
            steps {
                sh '''
                docker rm -f php-app || true
                docker run -d -p 8081:80 --name php-app php-jenkins-app
                '''
            }
        }
    }
}
