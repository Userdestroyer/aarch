if [ -z "$#" ]
then
      echo "NO ARGUMENTS"
else
    if [ $1 = "up" ]; then
        sudo docker-compose up -d --build
    elif [ $1 = "down" ]; then
        sudo docker-compose down
    elif [ $1 = "status" ]; then
        sudo docker container ls
    elif [ $1 = "clear" ]; then
        docker volume rm $(docker volume ls -qf dangling=true)
    else
        docker-compose run --rm $1 $2 $3 $4
    fi
fi