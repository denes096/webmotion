#!/bin/bash

echo "127.0.0.1  backend.webmotion.io frontend.webmotion.io" >> /etc/hosts

docker build -t webmotion .