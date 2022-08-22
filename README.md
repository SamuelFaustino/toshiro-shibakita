# Docker: Utilização prática no cenário de Microsserviços :whale2:
---
## Problemas com a nuvem privada

1 – Dificuldades com a segurança da Tecnologia da Informação (lógica e física)
2 – Custo com mão de obra especializada
3 – Custo de Hardware
4 – Custo de Energia elétrica
5 – Falta de Energia (uso de geradores)
6 – Despesas inesperadas

## Vantagens de migrar para a nuvem pública

1 – Preço (pague somente o que usar)
2 - Facilidade de contratação, configuração e infraestrutura
3 – Escalabilidade
4 - Performance

## Microsserviços

 É tipo de arquitetura de software, que consiste em construir aplicações desmembrando-as em serviços independentes. Estes serviços se comunicam entre si usando APIs e promovem grande agilidade em times de desenvolvimento.
 Com isso quando quebramos uma aplicação monolítica em várias pequenas partes, conseguimos escalá-las de forma separada. Supondo que um serviço de autenticação seja chamado várias vezes durante a sessão de um usuário, com certeza o stress sobre ele é maior.

## Cluster

Um cluster ('grupo, aglomerado') consiste em computadores ligados que trabalham em conjunto, de modo que, em muitos aspectos, podem ser considerados como um único sistema. Computadores em cluster executam a mesma tarefa, controlado e programado por software.
Cada computador presente em cluster é conhecido como nó (node).

## Docker Swarm

O Swarm é um recurso do Docker que fornece funcionalidades de orquestração de contêiner, incluindo clustering nativo de hosts do Docker e agendamento de cargas de trabalho de contêineres. Um grupo de hosts do Docker formam um cluster "Swarm".
