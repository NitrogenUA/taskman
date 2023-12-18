 #!/bin/bash
 
docker build -t taskman/demo .
docker run -itd -p 8080:80 taskman/demo:latest
