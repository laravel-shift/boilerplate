.PHONY:help start stop restart status pull logs remove
.DEFAULT_GOAL=help

help:
	@grep -h -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

start: ## Start container
	@docker-compose up -d --remove-orphans

stop: ## Stop container
	@docker-compose down --remove-orphans

restart: stop start ## Restart container

status: ## Get container status
	@docker-compose ps

pull: ## Pull last version of the container
	@docker-compose pull jekyll

logs: ## Get logs
	@docker-compose logs --follow jekyll

remove: ## Stops and remove container
	@docker-compose down --rmi all -v --remove-orphans
