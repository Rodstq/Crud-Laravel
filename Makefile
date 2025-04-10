
install:
	@echo "🔧 Instalando dependências do Laravel..."
	composer install

	@echo "🔧 Copiando .env de exemplo..."
	cp .env.example .env

	@echo "🔧 Gerando chave da aplicação..."
	php artisan key:generate

	@echo "🔧 Rodando migrations..."
	php artisan migrate

	@echo "🔧 Criando link simbólico de storage..."
	php artisan storage:link

	@echo "✅ Setup completo! Configure seu banco no .env se ainda não fez."

serve:
	php artisan serve

migrate:
	php artisan migrate

fresh:
	php artisan migrate:fresh --seed

seed:
	php artisan db:seed

test:
	php artisan test
