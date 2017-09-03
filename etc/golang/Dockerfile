FROM golang

COPY ./app /go/src/github.com/robsonscruz/api-go
WORKDIR /go/src/github.com/robsonscruz/api-go

RUN go get github.com/go-sql-driver/mysql
RUN go get github.com/robsonscruz/api-go
RUN go get ./

RUN go build

# RUN GO
COPY ./runtime/entrypoint.sh /sbin/entrypoint.sh
RUN chmod 755 /sbin/entrypoint.sh

EXPOSE 8180

CMD ["/sbin/entrypoint.sh"]