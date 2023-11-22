# Projeto_SAEP
 
**CONTEXTUALIZAÇÃO**  
Na indústria náutica, a organização das atividades realizadas pelos funcionários é crucial para a eficiência dos processos produtivos e a garantia da qualidade. Em regiões costeiras do Brasil, muitas empresas náuticas enfrentam desafios de gestão devido à falta de sistemas organizacionais. Isso resulta em prejuízos tanto para os funcionários quanto para o processo produtivo da indústria.

DESAFIO: Desenvolvimento de um Sistema de Gestão Interna para a Indústria Náutica

1. Diagrama de Casos de Uso:  
Desenvolva um diagrama representando atores, casos de uso e suas interações. Considere as regras de negócio que serão detalhadas nas próximas etapas. O diagrama deve ser entregue em formato de imagem.
---
2. Diagrama Entidade-Relacionamento (DER):  
Elabore um DER com tabelas, relacionamentos, campos e tipos de dados de acordo com o SGBD escolhido. Este diagrama deve atender às necessidades do sistema proposto e será entregue em formato de imagem.
---
3. Script do Banco de Dados:  
Crie um script que inclua a criação do banco de dados ("nautical_industry_db") e suas tabelas, com pelo menos três registros para cada tabela, respeitando as chaves primárias e estrangeiras. O script será entregue em formato .sql.
---
4. Tela de Autenticação de Usuários (Login):  
Desenvolva uma tela com campos para e-mail, senha e um botão "Entrar". Ao autenticar as credenciais no banco de dados, permita o acesso à "Tela Principal do Funcionário". Caso contrário, redirecione para a tela de autenticação.
---
5. Tela Principal do Funcionário:  
Apresente o nome do funcionário autenticado, um botão para sair do sistema e um para acessar o "Cadastro de Atividades". Liste as atividades do funcionário com número, nome e botões para exclusão e visualização.
---
6. Cadastro de Atividade:  
Crie uma tela para inserir o nome da atividade. Ao cadastrar, registre no banco de dados a atividade associada ao funcionário logado.
---
7. Listar Atividades do Funcionário:  
Na tela principal, liste as atividades pertencentes ao funcionário autenticado, permitindo exclusão e visualização de cada uma.
---
8. Exclusão de Atividade:  
Adicione a funcionalidade de exclusão das atividades listadas na tela principal. Antes da exclusão, apresente uma confirmação ao usuário.
---
9. Tela de Detalhes da Atividade:  
Desenvolva uma tela com informações detalhadas da atividade, incluindo o nome do funcionário, permitindo acesso à edição da atividade.
---
10. Listar Atividades do Funcionário (detalhes):  
Na tela de detalhes, liste as atividades registradas pelo funcionário, mostrando número, descrição e nome do funcionário.
---
11. Cadastro de Atividade (detalhes):  
Crie uma tela para inserir a descrição da atividade, registrando-a no banco de dados associada ao funcionário.
---
12. Sair do Sistema (Logout):  
Ao clicar em "Sair", encerre a sessão do usuário, redirecionando-o para a tela de login.
---
13. Requisitos de Infraestrutura:  
Elabore uma lista com requisitos de infraestrutura necessários para a instalação do sistema, incluindo SGBD, servidor de aplicação, linguagem de programação e suas respectivas versões.