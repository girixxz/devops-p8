pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git 'https://github.com/girixxz/devops-p8.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'curl -sS https://getcomposer.org/installer | php'
                sh 'php composer.phar install'
            }
        }

        stage('Run Unit Test') {
            steps {
                sh './vendor/bin/phpunit --bootstrap vendor/autoload.php tests'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t php-jenkins-app .'
            }
        }

        stage('Deploy Docker Container') {
            steps {
                sh 'docker rm -f php-app || true'
                sh 'docker run -d -p 8081:80 --name php-app php-jenkins-app'
            }
        }
    }
}
