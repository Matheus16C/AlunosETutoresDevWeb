
## Referencias para auxiliar na utilização do banco de dados e no desenvolvimento da aplicação

### Na tabela usuario o campo TIPO:
aluno = 1
<br>tutor = 2

### Na tabela conteudo o campo nivel:

iniciante = 1
<br>basico = 2
<br>intermediario = 3
<br>avançado = 4
<br>expert = 5

### Na tabela aulaindividual e aulacoletiva o campo status:

solicitada = 1 (para que professor aceite)
<br>aceita = 2
<br>finalizada = 3
<br>cancelada = 4

### Na tabela aulaindividual e aulacoletiva o campo status:

Possibilitando inscrições = 1
<br>finalizada = 2
<br>cancelada = 3

### Na tabela avaliacao_aulaindividual e avaliacao_aulacoletiva o campo status:

nota equivale ao numero de estrelas;

### Na tabela transacao o campo status pode ser representado por:

Em aprovação (Nesse momento o aluno pode cacelar a transação)
<br>Aprovado (Nesse momento o aluno pode iniciar um disputa caso a aula não tenha sido comprovadamente satisfatoria)
<br>Cancelado
<br>Finalizada (Nesse momento a aula ja aconteceu e o aluno ou gostou da aula ou não conseguiu comprovar a disputa)

### Na tabela transacao o campo tipo pode ser representado por:

Deposito (Nesse caso o participante da trasação é um campo null)
<br>Retirada (Nesse caso o participante da trasação é um campo null)
<br>Transferencia
<br>Recebimento (Somente tutores recebem dinheiro)

participante da tabela transacao é basicamente o outro usuario que vai receber ou enviar o dinheiro.
