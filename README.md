# 🎼 Concerto API

Uma API RESTful desenvolvida em Laravel para gerenciar músicos e instrumentos musicais, simulando um sistema de concertos.

## 📋 Sobre o Projeto

Este projeto é uma API para gerenciamento de concertos musicais, onde é possível cadastrar músicos e seus respectivos instrumentos. Foi desenvolvido como um exercício prático para aprendizado de conceitos de API REST, relacionamentos de banco de dados e containerização com Docker.

### 🎯 Funcionalidades

- **Gerenciamento de Músicos**: CRUD completo para músicos
- **Gerenciamento de Instrumentos**: CRUD completo para instrumentos
- **Relacionamento**: Um músico possui um instrumento, e um instrumento pertence a um músico
- **API RESTful**: Endpoints padronizados seguindo boas práticas REST
- **Containerização**: Ambiente completo dockerizado

## 🛠️ Tecnologias Utilizadas

- **PHP** 8.x
- **Laravel** 10.x
- **MySQL** 8.0
- **Docker** & Docker Compose
- **Postman** (para testes da API)

## ⚙️ Requisitos

- Docker
- Docker Compose
- Git

## 🚀 Como Executar o Projeto

### 1. Clone o repositório
```
git clone https://github.com/nielreis07/concerto-api.git
cd concerto-api
```

### 2. Configure o ambiente

# Copie o arquivo de configuração
cp .env.example .env

# Ajuste as variáveis de ambiente no arquivo .env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=concerto_api
DB_USERNAME=root
DB_PASSWORD=password
```
```
### 3. Execute com Docker

# Suba os containers
docker-compose up -d

# Instale as dependências
docker-compose exec app composer install

# Gere a chave da aplicação
docker-compose exec app php artisan key:generate

# Execute as migrations
docker-compose exec app php artisan migrate

# (Opcional) Execute os seeders
docker-compose exec app php artisan db:seed
```
```
### 4. Acesse a aplicação
A API estará disponível em: `http://localhost:8000`

## 📚 Endpoints da API

### Músicos

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/api/musicos` | Lista todos os músicos |
| GET | `/api/musicos/{id}` | Exibe um músico específico |
| POST | `/api/musicos` | Cria um novo músico |
| PUT | `/api/musicos/{id}` | Atualiza um músico |
| DELETE | `/api/musicos/{id}` | Remove um músico |

### Instrumentos

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| GET | `/api/instrumentos` | Lista todos os instrumentos |
| GET | `/api/instrumentos/{id}` | Exibe um instrumento específico |
| POST | `/api/instrumentos` | Cria um novo instrumento |
| PUT | `/api/instrumentos/{id}` | Atualiza um instrumento |
| DELETE | `/api/instrumentos/{id}` | Remove um instrumento |

## 📝 Exemplos de Requisições

### Criar um Músico
```json
POST /api/musicos
Content-Type: application/json

{
  "nome": "João",
  "sobrenome": "Silva",
  "cpf": "123.456.789-00"
}
```

### Criar um Instrumento
```json
POST /api/instrumentos
Content-Type: application/json

{
  "nome": "Violão",
  "tipo": "Cordas",
  "marca": "Yamaha",
  "musico_id": 1
}
```

### Resposta de Sucesso
```json
{
  "success": true,
  "data": {
    "id": 1,
    "nome": "João",
    "sobrenome": "Silva",
    "cpf": "123.456.789-00",
    "created_at": "2025-08-13T10:00:00.000000Z",
    "updated_at": "2025-08-13T10:00:00.000000Z",
    "instrumento": {
      "id": 1,
      "nome": "Violão",
      "tipo": "Cordas",
      "marca": "Yamaha"
    }
  },
  "message": "Músico criado com sucesso"
}
```

## 🗃️ Estrutura do Banco de Dados

### Tabela: musicos
- id (Primary Key)
- nome
- sobrenome
- cpf
- timestamps

### Tabela: instrumentos
- id (Primary Key)
- nome
- tipo
- marca
- musico_id (Foreign Key)
- timestamps

### Relacionamento
- Um músico tem um instrumento (`hasOne`)
- Um instrumento pertence a um músico (`belongsTo`)

## 🧪 Testando a API

### Com Postman
1. Importe a collection do Postman (se disponível)
2. Configure a URL base: `http://localhost:8000`
3. Teste os endpoints seguindo a documentação acima

### Com cURL
```
# Listar músicos
curl -X GET http://localhost:8000/api/musicos

# Criar músico
curl -X POST http://localhost:8000/api/musicos \
  -H "Content-Type: application/json" \
  -d '{"nome":"Maria","sobrenome":"Santos","cpf":"987.654.321-00"}'
```

## 🐳 Docker

O projeto inclui configuração Docker com:
- **PHP 8.x** com extensões necessárias
- **MySQL 8.0** como banco de dados
- **Volumes** para persistência de dados

### Comandos Úteis

```
# Ver logs dos containers
docker-compose logs -f

# Acessar o container da aplicação
docker-compose exec app bash

# Parar os containers
docker-compose down

# Rebuildar as imagens
docker-compose up --build
```

## 🤝 Como Contribuir

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 👨‍💻 Autor

**Niel Reis**
- GitHub: [@nielreis07](https://github.com/nielreis07)
- LinkedIn: [danielreis-dev](https://www.linkedin.com/in/danielreis-dev/)

## 📞 Contato

Se você tiver alguma dúvida sobre o projeto, sinta-se à vontade para entrar em contato!

-https://www.linkedin.com/in/danielreis-dev/
