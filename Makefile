# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: fbouanan <fbouanan@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/02/14 16:55:09 by fbouanan          #+#    #+#              #
#    Updated: 2023/02/15 14:28:30 by fbouanan         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

all:
	cd srcs ; docker-compose up --build

up:
	cd srcs ; docker-compose up

down:
	cd srcs ; docker-compose down

delete:
	cd srcs ; docker system prune -a

rm_volumes:
		docker ps -aq | xargs docker rm -fv && docker volume ls -q | xargs docker volume rm