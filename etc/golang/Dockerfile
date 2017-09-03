FROM golang

#ARG app_env
ENV APP_ENV production

COPY ./app /go/src/github.com/user/api-go/app
WORKDIR /go/src/github.com/user/api-go/app

RUN go get github.com/go-sql-driver/mysql
RUN go get github.com/robsonscruz/api-go
RUN go get ./
RUN go build

CMD if [ ${APP_ENV} = production ]; \
	then \
	app; \
	else \
	go get github.com/pilu/fresh && \
	fresh; \
	fi
	
EXPOSE 8180