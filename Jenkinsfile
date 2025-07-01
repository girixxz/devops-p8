pipeline {
    agent any

    environment {
        IMAGE_NAME = 'php-jenkins-app'
        CONTAINER_NAME = 'php-jenkins-app'
        PORT = '8081'
    }

    stages {
        stage('Clone Repository') {
            steps {
                echo 'Cloning repo...'
                // Ini otomatis dilakukan Jenkins jika pakai pipeline dari SCM
            }
        }

        stage('Install Dependencies') {
            steps {
                echo 'PHP tidak membutuhkan dependency tambahan.'
            }
        }

        stage('Build Docker Image') {
            steps {
                echo 'Membangun Docker image...'
                sh 'docker build -t $IMAGE_NAME .'
            }
        }

        stage('Run Docker Container') {
            steps {
                echo 'Menjalankan container dari image...'
                // Hentikan container lama kalau ada
                sh '''
                    if [ "$(docker ps -aq -f name=$CONTAINER_NAME)" ]; then
                        docker rm -f $CONTAINER_NAME
                    fi
                '''
                // Jalankan container baru
                sh 'docker run -d --name $CONTAINER_NAME -p $PORT:80 $IMAGE_NAME'
            }
        }
    }

    post {
        success {
            echo 'Pipeline selesai dengan sukses!'
        }
        failure {
            echo 'Pipeline gagal. Cek log untuk detail.'
        }
    }
}
