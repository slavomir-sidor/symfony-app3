#!/bin/bash

./bin/console orm:convert:mapping \
	--namespace="AppBundle\\Entity\\" \
	--force -vvv \
	--from-database annotation \
	--em="default" \
	./src/