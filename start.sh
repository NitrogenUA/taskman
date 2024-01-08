 #!/bin/bash
 
docker build -t taskman/demo .
docker run --rm -itd -p 8080:80 taskman/demo:latest
