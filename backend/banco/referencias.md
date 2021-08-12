
## Referencias para auxiliar na utilização do banco de dados e no desenvolvimento da aplicação

### Na tabela usuario o campo TIPO:
aluno = 1
tutor = 2

### Na tabela conteudo o campo nivel:

iniciante = 1
basico = 2
intermediario = 3
avançado = 4
expert = 5

### Na tabela aulaindividual e aulacoletiva o campo status:

solicitada = 1 (para que professor aceite)
aceita = 2
finalizada = 3
cancelada = 4

### Na tabela avaliacao_aulaindividual e avaliacao_aulacoletiva o campo status:

nota equivale ao numero de estrelas;

### Na tabela transacao o campo status pode ser representado por:

Em aprovação (Nesse momento o aluno pode cacelar a transação)
Aprovado (Nesse momento o aluno pode iniciar um disputa caso a aula não tenha sido comprovadamente satisfatoria)
Cancelado
Finalizada (Nesse momento a aula ja aconteceu e o aluno ou gostou da aula ou não conseguiu comprovar a disputa)

### Na tabela transacao o campo tipo pode ser representado por:

Deposito (Nesse caso o participante da trasação é um campo null)
Retirada (Nesse caso o participante da trasação é um campo null)
Transferencia
Recebimento (Somente tutores recebem dinheiro)

participante da tabela transacao é basicamente o outro usuario que vai receber ou enviar o dinheiro.
