FROM ubuntu:latest
LABEL authors="balyk"

ENTRYPOINT ["top", "-b"]
