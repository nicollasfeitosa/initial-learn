Build Command:
npx tailwindcss build src/main.css -o src/style.css

Instalar na maquina:
npm install -g postcss-cli

Como Minificar o CSS e remover os codigos não usados:

npm install postcss cssnano @fullhuman/postcss-purgecss -D

No: postcss.config.js coloque o exemplo da documentação

instale o postcss-CLI globalmente:
npm i -D postcss postcss-cli --force

postcss src/style.css -o src/prod.css
