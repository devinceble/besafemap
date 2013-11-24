all:
	make deploy

deploy:
	mkdir dist
	cp -R src/server dist/server
	cp -R src/client dist/server/public/client