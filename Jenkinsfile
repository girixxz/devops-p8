pipeline {
    agent any

    stages {

        stage('Install Dependencies') {
            steps {
                echo 'PHP tidak membutuhkan dependency khusus untuk script sederhana.'
            }
        }

        stage('Build Docker Image') {
            steps {
                echo 'Building Docker Image...'
                script {
                    docker.build('php-jenkins-app')
                }
            }
        }

        stage('Deploy Docker Container') {
            steps {
                echo 'Running Docker Container...'
                script {
                    sh 'docker rm -f php-jenkins-app || true'
                    sh 'docker run -d -p 8081:80 --name php-jenkins-app php-jenkins-app'
                }
            }
        }
    }
}
