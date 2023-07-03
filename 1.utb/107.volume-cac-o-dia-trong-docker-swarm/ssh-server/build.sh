#!/bin/bash
docker image rm vudinhquang/sshserver -f
docker build -t vudinhquang/sshserver -f Dockerfile .

# docker run --rm -p 2222:22 vudinhquang/sshserver