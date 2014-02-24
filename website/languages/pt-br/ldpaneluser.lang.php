<?php
/**
* Aqui serão definidos os textos da classe ldPaneluser do site.
*/

DEFINE("LDPU_LOG_TXT_MODIFY_DATA", "Usado o serviço de alterar dados da conta.");
DEFINE("LDPU_LOG_TXT_CLEAN_VAULT", "Usado o serviço de limpar bau.");
DEFINE("LDPU_LOG_TXT_DOUBLE_VAULT", "Usado o serviço de alternar bau.");
DEFINE("LDPU_LOG_TXT_MODIFY_PERSONALID", "Usado o serviço de alterar personal id.");
DEFINE("LDPU_LOG_TXT_RESET", "Usado o serviço de resetar personagem.");
DEFINE("LDPU_LOG_TXT_MASTER_RESET", "Usado o serviço de master reset.");
DEFINE("LDPU_LOG_TXT_RESET_TRANSFER", "Usado o serviço de transferir resets.");
DEFINE("LDPU_LOG_TXT_CLEAN_PK", "Usado o serviço de limpar pk.");
DEFINE("LDPU_LOG_TXT_DISTRIBUTE_POINTS", "Usado o serviço de distribuir pontos.");
DEFINE("LDPU_LOG_TXT_MOVE_CHARACTER", "Usado o serviço de mover personagem.");
DEFINE("LDPU_LOG_TXT_CHANGE_NICK", "Usado o serviço de alterar nick.");
DEFINE("LDPU_LOG_TXT_CHANGE_CLASS", "Usado o serviço de alterar classe.");
DEFINE("LDPU_LOG_TXT_REDISTRIBUTE_POINTS", "Usado o serviço de redistribuir pontos.");
DEFINE("LDPU_LOG_TXT_CLEAN_INVENTORY", "Usado o serviço de limpar invetário.");
DEFINE("LDPU_LOG_TXT_SEND_SMS", "Usado o serviço de envio de sms.");
DEFINE("LDPU_LOG_TXT_GAME_DISCONNECT", "Usado o serviço de desconectar conta.");
DEFINE("LDPU_LOG_TXT_TRANSFER_CASH", "Usado o serviço de transferir cash.");
DEFINE("LDPU_LOG_TXT_COLLECTOR_POINTS", "Usado o serviço de coletar pontos.");
DEFINE("LDPU_LOG_TXT_NOT_FOUND", "O Serviço de tipo %d não foi cadastrado para logs."); 
                                                                        
DEFINE("LDPU_DEMO_OPTION_NON_AVAILABLE", "Opção não disponivel usando uma licença de demonstração.");  
DEFINE("LDPU_YOU_MUST_BE_OFFLINE", "Voc&ecirc; deve estar offline no jogo."); 
DEFINE("LDPU_THIS_CHARACTER_NOT_EXIST", "Erro: Esse personagem não existe ou não pertence ao seu login."); 
DEFINE("LDPU_YES", "Sim"); 
DEFINE("LDPU_NOT", "N&atilde;o"); 

DEFINE("LDPU_OPTIONS_DEFAULT_BANNED_ACCOUNT", "<strong><em>Sua conta está banida até:</em> %s.</strong><br />Para desbanir sua conta acesse seu painel de controle após a data especificada acima."); 
DEFINE("LDPU_OPTIONS_DEFAULT_NOT_ACTIVE_ACCOUNT", "<strong>Sua conta ainda não foi ativada!</strong><br />Você só conseguirá entrar no jogo após a ativação da mesma.<br />Para ativar, veja as instruções enviadas ao seu e-mail.<br /><br />Caso o e-mail de ativação não tenha chegado na sua caixa de e-mails, <a href='?page=register&resendActivateEmail=%s'>clique aqui</a> para enviar-lo novamente."); 
DEFINE("LDPU_OPTIONS_DEFAULT_FLAT_EXPIRE", "Vencimento"); 
DEFINE("LDPU_OPTIONS_DEFAULT_FLAT_ERROR", "Erro ao definir status da conta."); 
DEFINE("LDPU_OPTIONS_DEFAULT_LAST_CONNECTION", "na sala"); 
DEFINE("LDPU_OPTIONS_DEFAULT_YOU_NOT_HAVE_CHARACTERS", "Você não possui personagens"); 
DEFINE("LDPU_OPTIONS_DEFAULT_BANNED_CHARACTER", "<strong><em>Personagem %s banido até:</em> %s</strong><br />Para desbanir seu personagem acesse seu painel de controle após a data especificada acima."); 


DEFINE("LDPU_MODIFY_DATA_FILL_NAME", "O campo <strong>Meu nome</strong> deve ser preenchido."); 
DEFINE("LDPU_MODIFY_DATA_INVALID_SIZE_NAME", "O campo <strong>Meu nome</strong> não deve ter mais que 10 caracters.");      
DEFINE("LDPU_MODIFY_DATA_FILL_PHONE", "O campo <strong>Meu telefone</strong> deve ser preenchido.");                   
DEFINE("LDPU_MODIFY_DATA_INVALID_SIZE_PHONE", "O campo <strong>Meu telefone</strong> não deve ter mais que 15 caracters."); 
DEFINE("LDPU_MODIFY_DATA_SUCCESS_ALTER", "Os dados foram alterados com sucesso."); 
DEFINE("LDPU_MODIFY_DATA_ERROR_ALTER", "Erro ao alterar dados."); 

DEFINE("LDPU_MODIFY_DATA_FILL_PASSWORD", "O campo <strong>Senha atual</strong> deve ser preenchido."); 
DEFINE("LDPU_MODIFY_DATA_FILL_NEW_PASSWORD", "Os campos <strong>Nova senha</strong> devem ser preenchidos."); 
DEFINE("LDPU_MODIFY_DATA_FILL_SECRET_ANSWER", "O campo <strong>Resposta secreta</strong> deve ser preenchido."); 
DEFINE("LDPU_MODIFY_DATA_INVALID_SIZE_PASSWORD", "Os campos <strong>Nova senha</strong> não devem ter mais que 10 caracters."); 
DEFINE("LDPU_MODIFY_DATA_PASSWORDS_MUST_BE_IDENTICAL", "Os campos <strong>Senha atual</strong> devem ser preenchidos com os valores iguais."); 
DEFINE("LDPU_MODIFY_DATA_INVALID_SECRET_ANSWER", "A <strong>resposta secreta</strong> informada não é válida."); 
DEFINE("LDPU_MODIFY_DATA_INVALID_PASSWORD", "A <strong>senha atual</strong> informada não é válida.");
DEFINE("LDPU_MODIFY_DATA_LOG_PASSWORD_ALTER", "Alterado a senha");  

DEFINE("LDPU_CLEAN_VAULT_NOT_HAVE_VAULT", "Essa conta não possui bau");  
DEFINE("LDPU_CLEAN_VAULT_FILL_PASSWORD", "O campo <strong>Minha senha</strong> deve ser preenchido.");  
DEFINE("LDPU_CLEAN_VAULT_CHOOSE_TASK", "Selecione alguma tarefa a ser realizada.");  
DEFINE("LDPU_CLEAN_VAULT_INVALID_PASSWORD", "A <strong>senha</strong> informada não é válida.");  
DEFINE("LDPU_CLEAN_VAULT_1_LOG_SUCCESS", "Limpeza do bau 1 efetuada com sucesso!");  
DEFINE("LDPU_CLEAN_VAULT_1_TEXT_SUCCESS", "Sucesso: <em><strong>Bau 1 Limpo</strong></em>");    
DEFINE("LDPU_CLEAN_VAULT_2_LOG_SUCCESS", "Limpeza do bau 2 efetuada com sucesso!");  
DEFINE("LDPU_CLEAN_VAULT_2_TEXT_SUCCESS", "Sucesso: <em><strong>Bau 2 Limpo</strong></em>");  
DEFINE("LDPU_CLEAN_VAULT_ZEN_LOG_SUCCESS", "Limpeza do zen no bau!");  
DEFINE("LDPU_CLEAN_VAULT_ZEN_TEXT_SUCCESS", "Sucesso: <em><strong>Zen Limpo</strong></em>"); 

 
DEFINE("LDPU_VIRTUAL_VAULT_CANT_LOAD_DB", "O banco de dados não pode ser carregado.");  
DEFINE("LDPU_VIRTUAL_VAULT_ITEM_NOT_FOUND", "Esse item n&atilde;o existe no ba&uacute;.");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_ITEM", "Item");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_LEVEL", "Level");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_OPTION", "Adicionais");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_LUCK", "Luck");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_SKILL", "Skill");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_ANCIENT", "Ancient");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_DURABILITY", "Durabilidade");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_SERIAL", "Serial");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_EXCELLENT", "Op&ccedil;&otilde;es excelentes");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_REFINE", "Refine option");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_HARMONY", "Harmony option");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_SOCKET", "Socket option");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_SOCKET_NAME", "Socket");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_SEND_TO_VAULT_VIRTUAL", "Enviar para o ba&uacute; virtual");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_SEND_TO_VAULT_GAME", "Enviar para o ba&uacute; jogo");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_SEND_DEMO", "Usando uma licen&ccedil;a de demonstra&ccedil;&atilde;o, somente &eacute; possivel enviar 20 itens para o ba&uacute; virtual.");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_SEND_ERROR", "Ocorreu um erro ao enviar o item...");  
DEFINE("LDPU_VIRTUAL_VAULT_TEXT_SEND_ERROR_NO_SPACE", "Seu ba&uacute; no jogo n&atilde;o possui espa&ccedil;o para adicionar esse item.");  


DEFINE("LDPU_QUESTION_EVENT_INPUT_RESPONSE", "Responder");
DEFINE("LDPU_QUESTION_EVENT_ALREADY_ANSWERED", "Voc&ecirc; j&aacute; respondeu essa pergunta!");
DEFINE("LDPU_QUESTION_EVENT_SELECT_ANSWER", "Selecione uma resposta");
DEFINE("LDPU_QUESTION_EVENT_TIME_END", "Tempo para responder encerrado!");
DEFINE("LDPU_QUESTION_EVENT_RESPONSE_CORRECT", "Resposta correta!");
DEFINE("LDPU_QUESTION_EVENT_RESPONSE_CORRECT_RECEIVER_ITEM", "Voc&ecirc; ganhou o item %s, registre o serial abaixo no<br />Golden Archer do site para receber o seu pr&ecirc;mio!");
DEFINE("LDPU_QUESTION_EVENT_RESPONSE_INCORRECT", "Resposta incorreta!");


DEFINE("LDPU_GOLDEN_ARCHER_FILL_SERIAL", "Preencha o serial");
DEFINE("LDPU_GOLDEN_ARCHER_INVALID_SERIAL", "Serial inv&aacute;lido!");
DEFINE("LDPU_GOLDEN_ARCHER_SERIAL_NOT_BELONG", "Esse serial n&atilde;o lhe pertence.");
DEFINE("LDPU_GOLDEN_ARCHER_SERIAL_IS_ACTIVE", "Esse serial j&aacute; foi ativado.");
DEFINE("LDPU_GOLDEN_ARCHER_ITEM_NOT_EXISTS", "Esse item n&atilde;o existe no item(kor).txt");
DEFINE("LDPU_GOLDEN_ARCHER_ACCOUNT_NOT_VAULT", "Sua conta n&atilde;o possui ba&uacute;");
DEFINE("LDPU_GOLDEN_ARCHER_VAULT_NOT_SPACE", "Seu ba&uacute; n&atilde; possui espa&ccedil;o");
DEFINE("LDPU_GOLDEN_ARCHER_ERROR_MAKE_ITEM", "Erro ao gerar item");
DEFINE("LDPU_GOLDEN_ARCHER_REGISTER_SUCCESS", "Serial registrado!");
DEFINE("LDPU_GOLDEN_ARCHER_ITEM_RECEIVER", "Recebido");

DEFINE("LDPU_COLLECTOR_POINTS_SUCCESS_LOG", "(%d) %s, %d pontos.");
DEFINE("LDPU_COLLECTOR_POINTS_SUCCESS", "Foram coletadas %d unidades do item %s no seu baú principal!<br />Você acaba de receber %d pontos por estes itens!");
DEFINE("LDPU_COLLECTOR_POINTS_ERROR", "Não foi encontrado nenhuma unidade do item %s no seu baú principal.");


DEFINE("LDPU_AUCTIONS_NOT_FOUND", "Leilão não cadastrado ou não ativado.");
DEFINE("LDPU_AUCTIONS_STATUS_END", "Encerrado");
DEFINE("LDPU_AUCTIONS_STATUS_WAIT_BEGIN", "Aguardando início");
DEFINE("LDPU_AUCTIONS_STATUS_IN_PROGRESS", "Em andamento");
DEFINE("LDPU_AUCTIONS_STATUS_WAIT_PREMIUM", "Aguardando premiação");
DEFINE("LDPU_AUCTIONS_STATUS_ERROR", "Status desconhecido.");
DEFINE("LDPU_AUCTIONS_TAKE_FRIST_BID", "Ainda n&atilde;o foi dado lance! Seja o primeiro!");
DEFINE("LDPU_AUCTIONS_ID", "Id");
DEFINE("LDPU_AUCTIONS_NAME", "Nome");
DEFINE("LDPU_AUCTIONS_STATUS", "Status");
DEFINE("LDPU_AUCTIONS_DATE_BEGIN", "Data de in&iacute;cio");
DEFINE("LDPU_AUCTIONS_DATE_END", "Data do t&eacute;rmino");
DEFINE("LDPU_AUCTIONS_MIN_BID", "Lance m&iacute;nimo");
DEFINE("LDPU_AUCTIONS_PREMIUM", "Pr&ecirc;mio");
DEFINE("LDPU_AUCTIONS_PHOTO", "Foto");
DEFINE("LDPU_AUCTIONS_LAST_PUT_BID", "&Uacute;ltimo a dar lance:");
DEFINE("LDPU_AUCTIONS_REFRESH", "Atualizar");
DEFINE("LDPU_AUCTIONS_AUCTION_VALUE", "Valor do leil&atilde;o");
DEFINE("LDPU_AUCTIONS_YOUR_LAST_BID", "Seu &uacute;ltimo lance");
DEFINE("LDPU_AUCTIONS_PUT_TOUR_BID", "D&ecirc; seu lance em pontos");
DEFINE("LDPU_AUCTIONS_INTPUT_PUT_BID", "Dar Lance");
DEFINE("LDPU_AUCTIONS_YOU_HAVE", "Voc&ecirc; possui");
DEFINE("LDPU_AUCTIONS_YOU_WINNER", "Você ganhou este leilão!");
DEFINE("LDPU_AUCTIONS_FILL_NUMBER_POSITIVE", "Preencha a quantidade de %s com um número maior que 0.");
DEFINE("LDPU_AUCTIONS_INVALID_AUCTION", "Id do leilão inválido.");
DEFINE("LDPU_AUCTIONS_INVALID_AUCTION_OR_NOT_ACTIVE", "Leilão não cadastrado ou não ativado.");
DEFINE("LDPU_AUCTIONS_YOU_NEED_BID_MORE", "Você precisa dar um lance maior que");
DEFINE("LDPU_AUCTIONS_YOU_NOT_HAVE_POINTS", "Você não possui essa quantidade de");
DEFINE("LDPU_AUCTIONS_BID_SUCCESS_REGISTER", "Seu lance foi registrado com sucesso.");
DEFINE("LDPU_AUCTIONS_NOT_HAVE_AUCTIONS", "Nenhum leilão foi cadastrado.");  


DEFINE("LDPU_DOUBLE_VAULT_NOT_HAVE_VAULT", "Essa conta não possui bau");
DEFINE("LDPU_DOUBLE_VAULT_FILL_PASSWORD", "O campo <strong>Minha senha</strong> deve ser preenchido.");
DEFINE("LDPU_DOUBLE_VAULT_INVALID_SIZE_PASSWORD", "O campo <strong>Minha Senha</strong> não deve ter mais que 10 caracters.");
DEFINE("LDPU_DOUBLE_VAULT_INVALID_PASSWORD", "A <strong>senha</strong> informada não é válida.");
DEFINE("LDPU_DOUBLE_VAULT_SUCCESS_ALTER", "O bau foi alternado com sucesso.");
DEFINE("LDPU_DOUBLE_VAULT_ERROR_ALTER", "Erro ao alternar o bau.");

DEFINE("LDPU_TRANSFER_CASH_FILL_LOGIN_DESTINY", "Preencha o campo: <strong>Login de destino</strong> corretamente.");
DEFINE("LDPU_TRANSFER_CASH_INVALID_AMOUNT", "Preencha o campo: <strong>Quantidade a transferir</strong> corretamente com um número maior que 1.");
DEFINE("LDPU_TRANSFER_CASH_INVALID_TYPE", "Preencha o campo: <strong>Tipo de moeda a transferir</strong> corretamente.");
DEFINE("LDPU_TRANSFER_CASH_LOGIN_NOT_FOUND", "O login: <strong>%s</strong> não existe no banco de dados.");
DEFINE("LDPU_TRANSFER_CASH_CANT_TRANSF_TO_YOU_LOGIN", "Informe um login para transferência que não seja o seu.");
DEFINE("LDPU_TRANSFER_CASH_NOT_HAVE_PREVILEGY", "Seu login não possui permissão para transferir moedas pelo site.");
DEFINE("LDPU_TRANSFER_CASH_NOT_HAVE_THIS_AMOUNT", "Você não possui essa quantia de %s solicitado para transferir.");
DEFINE("LDPU_TRANSFER_CASH_ERROR", "Erro ao creditar o %s para o login solicitado.");
DEFINE("LDPU_TRANSFER_CASH_LOG_SUCCESS", "Login de destino: %s, Quantia: %d, Moeda: %s");
DEFINE("LDPU_TRANSFER_CASH_TEXT_SUCCESS", "Foram transferidos a quantia de %d %s para o login: %s");

DEFINE("LDPU_GAME_DISCONNECT_INVALID_PASSWORD", "A <strong>senha</strong> informada não é válida.");

DEFINE("LDPU_LOG_BUY_TEXT_ID", "Id");
DEFINE("LDPU_LOG_BUY_TEXT_AMOUNT", "Quantia");
DEFINE("LDPU_LOG_BUY_TEXT_DATE", "Data");
DEFINE("LDPU_LOG_BUY_TEXT_HOUR", "Hora");
DEFINE("LDPU_LOG_BUY_TEXT_COMMENT", "Comentário");
DEFINE("LDPU_LOG_BUY_TEXT_COMMENT_ADM", "Comentário Admin");
DEFINE("LDPU_LOG_BUY_TEXT_STATUS", "Status");
DEFINE("LDPU_LOG_BUY_TEXT_TYPE", "Tipo");
DEFINE("LDPU_LOG_BUY_TEXT_DAYS", "Dias");
DEFINE("LDPU_LOG_BUY_TEXT_VALUE_BY", "Valor Pago");
DEFINE("LDPU_LOG_BUY_TEXT_IN_PROGRESS", "Em Andamento");
DEFINE("LDPU_LOG_BUY_TEXT_COMPLETED", "Concluido");
DEFINE("LDPU_LOG_BUY_TEXT_REJECTED", "Rejeitado");
DEFINE("LDPU_LOG_BUY_TEXT_STATUS_ERROR", "Erro de Status");

DEFINE("LDPU_MODIFY_PID_FILL_ONLY_NUMBERS", "Escreva somente números.");
DEFINE("LDPU_MODIFY_PID_INVALID_SIZE", "O personal id deve conter 7 digitos.");
DEFINE("LDPU_MODIFY_PID_INVALID_PASSWORD", "Senha incorreta.");
DEFINE("LDPU_MODIFY_PID_SUCCESS", "Atenção: Seu personal foi alterado com sucesso!<br />Nunca se esqueça dele, pois ele é necessário no jogo!<br /><br />Obrigado.");

DEFINE("LDPU_RESET_NOT_HAVE_LEVEL", "Erro: Você ainda não tem level para resetar.");
DEFINE("LDPU_RESET_NOT_HAVE_ZEN", "Erro: Você não tem zen para resetar.");
DEFINE("LDPU_RESET_LIMIT_RESETS", "Erro: Você chegou no limite de resets.");
DEFINE("LDPU_RESET_TEXT_CHARACTER_SELECTED", "Personagem selecionado");
DEFINE("LDPU_RESET_TEXT_YOU_NEED_TO_RESET", "Você precisa para resetar");
DEFINE("LDPU_RESET_TEXT_LEVEL", "Level");
DEFINE("LDPU_RESET_TEXT_ZEN", "Quantidade de zen");
DEFINE("LDPU_RESET_TEXT_STATUS_BEFORE_RESET", "Status do personagem antes do reset");
DEFINE("LDPU_RESET_TEXT_STATUS_AFTER_RESET", "Status do personagem depois do reset");
DEFINE("LDPU_RESET_TEXT_RESETS", "Resets");
DEFINE("LDPU_RESET_TEXT_CLASS", "Classe");
DEFINE("LDPU_RESET_TEXT_MAGICS", "Magias");
DEFINE("LDPU_RESET_TEXT_MAGICS_ERASE", "As magias serão apagadas");
DEFINE("LDPU_RESET_TEXT_MAGICS_NOT_ERASE", "As magias continuam");
DEFINE("LDPU_RESET_TEXT_ITEMS", "Itens");
DEFINE("LDPU_RESET_TEXT_ITEMS_ERASE", "Os itens serão apagados");
DEFINE("LDPU_RESET_TEXT_ITEMS_NOT_ERASE", "Os itens continuam");
DEFINE("LDPU_RESET_TEXT_QUESTS", "Itens");
DEFINE("LDPU_RESET_TEXT_QUESTS_ERASE", "As quests serão apagadas");
DEFINE("LDPU_RESET_TEXT_QUESTS_NOT_ERASE", "As quests continuam");
DEFINE("LDPU_RESET_TEXT_SUBMIT", "Resetar");
DEFINE("LDPU_RESET_LOG_SUBMIT_ERASED_ITEMS", "Itens deletados");
DEFINE("LDPU_RESET_TEXT_DEMO_LIMIT", "Erro: Opção limitada a 200 resets usando uma licença de demonstração no site.");
DEFINE("LDPU_RESET_TEXT_SUCCESS", "Seu personagem foi resetado com sucesso!<br />Tenha um bom jogo.");

DEFINE("LDPU_MRESET_TEXT_NOT_HAVE_RESETS", "Erro: Você não tem resets para dar o master reset.");
DEFINE("LDPU_MRESET_TEXT_NEED_POINTS_STRENGTH", "Erro: Você precisa de %d pontos em força.");
DEFINE("LDPU_MRESET_TEXT_NEED_POINTS_DEXTERITY", "Erro: Você precisa de %d pontos em agilidade.");
DEFINE("LDPU_MRESET_TEXT_NEED_POINTS_ENERGY", "Erro: Você precisa de %d pontos em energia.");
DEFINE("LDPU_MRESET_TEXT_NEED_POINTS_VITALITY", "Erro: Você precisa de %d pontos em vitalidade.");
DEFINE("LDPU_MRESET_TEXT_NEED_POINTS_LEADERSHIP", "Erro: Você precisa de %d pontos em comando/carisma.");
DEFINE("LDPU_MRESET_TEXT_DEMO_LIMIT", "Erro: Opção limitada a 50 master resets usando uma licença de demonstração no site.");
DEFINE("LDPU_MRESET_TEXT_POINTS_STRENGTH", "Pontos em força");
DEFINE("LDPU_MRESET_TEXT_POINTS_DEXTERITY", "Pontos em agilidade");
DEFINE("LDPU_MRESET_TEXT_POINTS_ENERGY", "Pontos em energia");
DEFINE("LDPU_MRESET_TEXT_POINTS_VITALITY", "Pontos em vitalidade");
DEFINE("LDPU_MRESET_TEXT_POINTS_LEADERSHIP", "Pontos em comando/carisma");
DEFINE("LDPU_MRESET_TEXT_MASTER_RESETS", "Master Resets");
DEFINE("LDPU_MRESET_TEXT_SUBMIT", "Aplicar Master Reset");
DEFINE("LDPU_MRESET_TEXT_SUCCESS", "Seu personagem foi resetado com master reset com sucesso!<br />Tenha um bom jogo.");

DEFINE("LDPU_RESET_TRANS_TEXT_CHOOSE_NOT_EQUAL", "Não selecione os dois personagens iguais.");
DEFINE("LDPU_RESET_TRANS_TEXT_CHARACTER_ORIGIN", "Char Origem");
DEFINE("LDPU_RESET_TRANS_TEXT_CHARACTER_DESTINY", "Char Destino");
DEFINE("LDPU_RESET_TRANS_TEXT_TRANSFER", "Transferir");
DEFINE("LDPU_RESET_TRANS_TEXT_RESETS", "Resets");
DEFINE("LDPU_RESET_TRANS_TEXT_WARNING", "Atenção, os pontos dos dois personagens serão restaurados! <br /> Recomendamos que você estaja no level de reset para poder resetar o char depois da transferencia de resets.");
DEFINE("LDPU_RESET_TRANS_TEXT_SUBMIT", "Transferir Resets Agora");
DEFINE("LDPU_RESET_TRANS_TEXT_FILL_ONLY_NUMBERS", "Digite apenas números.");
DEFINE("LDPU_RESET_TRANS_TEXT_INVALID_AMOUNT", "Digite um número maior que zero.");
DEFINE("LDPU_RESET_TRANS_TEXT_MINIMUM_AMOUNT", "O valor minimo de resets a transferir é de %d resets.");
DEFINE("LDPU_RESET_TRANS_TEXT_NOT_HAVE_AMOUNT_RESETS", "Você não possui essa quantia de resets.");
DEFINE("LDPU_RESET_TRANS_TEXT_SUCCESS", "Resets transferidos com sucesso!");
DEFINE("LDPU_RESET_TRANS_LOG_SUCCESS", "Transferido %d resets para: %s");

DEFINE("LDPU_CLEAN_PK_NOT_PK", "<strong>Erro:</strong> Você não é Pk.");
DEFINE("LDPU_CLEAN_SELECTED_CHARACTER", "Personagem selecionado");
DEFINE("LDPU_CLEAN_PK_LEVEL", "Level do Pk");
DEFINE("LDPU_CLEAN_NEED_ZEN", "Zen necessário");
DEFINE("LDPU_CLEAN_HAVE_ZEN", "Sua quantia de zen");
DEFINE("LDPU_CLEAN_NOT_HAVE_ZEN", "Erro: Você não tem zen suficiente.");
DEFINE("LDPU_CLEAN_SUBMIT", "Limpar PK");
DEFINE("LDPU_CLEAN_SUCCESS_TEXT", "Sucesso: Seu pk foi removido!");

DEFINE("LDPU_DISTRIBUTE_POINTS_NOT_HAVE_AMOUNT", "<strong>Erro:</strong> Voc&ecirc; n&atilde;o possui essa quantidade de pontos.");
DEFINE("LDPU_DISTRIBUTE_POINTS_MAX_POINTS_AMOUNT", "<strong>Erro:</strong> Maximo %s pontos");
DEFINE("LDPU_DISTRIBUTE_POINTS_CURRENT_AMOUNT", "Atualmente");
DEFINE("LDPU_DISTRIBUTE_POINTS_NEXT_AMOUNT", "Vai ficar");
DEFINE("LDPU_DISTRIBUTE_POINTS_CHARACTER", "Personagem");
DEFINE("LDPU_DISTRIBUTE_POINTS_YOU_HAVE", "Voc&ecirc; possui");
DEFINE("LDPU_DISTRIBUTE_POINTS_OF_DISTRIBUTE", "pontos para distribuir.");
DEFINE("LDPU_DISTRIBUTE_POINTS_STRENGTH", "Força");
DEFINE("LDPU_DISTRIBUTE_POINTS_DEXTERITY", "Agilidade");
DEFINE("LDPU_DISTRIBUTE_POINTS_ENERGY", "Energia");
DEFINE("LDPU_DISTRIBUTE_POINTS_VITALITY", "Vitalidade");
DEFINE("LDPU_DISTRIBUTE_POINTS_LEADERSHIP", "Comando / Carisma");
DEFINE("LDPU_DISTRIBUTE_POINTS_SUBMIT", "Distribuir Pontos Agora");
DEFINE("LDPU_DISTRIBUTE_ONLY_NUMBERS", "<strong>Erro:</strong> Caracters inválidos.");
DEFINE("LDPU_DISTRIBUTE_MAXIMUM_POINTS", "<strong>Erro:</strong> Não ultrapasse %d em cada status.");
DEFINE("LDPU_DISTRIBUTE_SUCCESS", "<strong>Sucesso:</strong> Pontos distribuidos!");


DEFINE("LDPU_MOVE_CHARCTER_MUST_MORE_ZERO", "Deve ser maior que 0.");
DEFINE("LDPU_MOVE_CHARCTER_MUST_LOWER_255", "Deve ser menor que 255.");
DEFINE("LDPU_MOVE_CHARCTER_INVALID_COORDENATE", "Coordenada V&aacute;lida.");
DEFINE("LDPU_MOVE_CHARCTER_CHARACTER", "Personagem");
DEFINE("LDPU_MOVE_CHARCTER_MOVE_TO", "Mover para");
DEFINE("LDPU_MOVE_CHARCTER_COORD_X", "Coordenada X");
DEFINE("LDPU_MOVE_CHARCTER_COORD_Y", "Coordenada Y");
DEFINE("LDPU_MOVE_CHARCTER_SUBMIT", "Mover Personagem Agora");
DEFINE("LDPU_MOVE_CHARCTER_SUCCESS", "Sucesso: O personagem foi movido!");
DEFINE("LDPU_MOVE_CHARCTER_SUCCESS_LOG", "Mapa Número: %d, PosX: %d, PosY: %d");

DEFINE("LDPU_CHANGE_NICK_CHARACTER", "Personagem selecionado");
DEFINE("LDPU_CHANGE_NICK_NEW_NICK", "Novo nick");
DEFINE("LDPU_CHANGE_NICK_SUBMIT", "Mudar Nick");
DEFINE("LDPU_CHANGE_NICK_NOT_HAVE_GUILD", "Erro: Você não pode estar em uma guild.");
DEFINE("LDPU_CHANGE_NICK_INVALID_CHARS", "Erro: Caracters incorretos.");
DEFINE("LDPU_CHANGE_NICK_INVALID_NAME_SIZE", "Erro: Maximo de 10 caracters no nome.");
DEFINE("LDPU_CHANGE_NICK_FILL_NAME", "Erro: Você deve especificar um novo nome parar alterar.");
DEFINE("LDPU_CHANGE_NICK_ALREADY_EXISTS_THIS_NICK", "Erro: Já existe um char com esse nome.");
DEFINE("LDPU_CHANGE_NICK_CHARACTER_BANNED", "Erro: Seu personagem está banido.");
DEFINE("LDPU_CHANGE_NICK_INVALID_SIGLES", "Erro: N&atilde;o use nomes com as siglas: WEBZEN, ADM, GM, MD, NT ou DV.<br/>Favor escolher outro nome.");
DEFINE("LDPU_CHANGE_NICK_SUCCESS", "Sucesso: O personagem renomeado!");
DEFINE("LDPU_CHANGE_NICK_SUCCESS_LOG", "Novo nome");

DEFINE("LDPU_CHANGE_CLASS_NEW_CLASS", "Nova Classe");
DEFINE("LDPU_CHANGE_CLASS_SUBMIT", "Mudar Classe Agora");
DEFINE("LDPU_CHANGE_CLASS_SUCCESS", "Sucesso: A classe do personagem foi alterada!");
DEFINE("LDPU_CHANGE_CLASS_SUCCESS_LOG", "Novo código da classe");

DEFINE("LDPU_REDISTRIBUTE_POINTS_CHARACTER", "Personagem selecionado");
DEFINE("LDPU_REDISTRIBUTE_POINTS_LEVEL_UP_POINTS", "Pontos para distribuir");
DEFINE("LDPU_REDISTRIBUTE_POINTS_STRENGTH", "Pontos em força");
DEFINE("LDPU_REDISTRIBUTE_POINTS_DEXTERITY", "Pontos em agilidade");
DEFINE("LDPU_REDISTRIBUTE_POINTS_VITALITY", "Pontos em vitalidade");
DEFINE("LDPU_REDISTRIBUTE_POINTS_ENERGY", "Pontos em energia");
DEFINE("LDPU_REDISTRIBUTE_POINTS_LEADERSHIP", "Pontos em comando");
DEFINE("LDPU_REDISTRIBUTE_POINTS_TOTAL_POINTS", "Total de pontos");
DEFINE("LDPU_REDISTRIBUTE_POINTS_SUBMIT", "Redistribuir Pontos");
DEFINE("LDPU_REDISTRIBUTE_POINTS_SUCCESS", "Sucesso: Os pontos foram distribuidos com sucesso!");

DEFINE("LDPU_CLEAN_INVENTORY_CHARACTER", "Personagem selecionado");
DEFINE("LDPU_CLEAN_INVENTORY_ERASE_ITEMS", "Apagar Itens");
DEFINE("LDPU_CLEAN_INVENTORY_ERASE_MAGICS", "Apagar Magias");
DEFINE("LDPU_CLEAN_INVENTORY_ERASE_ZEN", "Apagar Zen");
DEFINE("LDPU_CLEAN_INVENTORY_PASSWORD", "Sua Senha");
DEFINE("LDPU_CLEAN_INVENTORY_SUBMIT", "Limpar");
DEFINE("LDPU_CLEAN_INVENTORY_INVALID_PASSWORD", "Erro: Senha incorreta");
DEFINE("LDPU_CLEAN_INVENTORY_SELECT_THING", "Erro: Você deve selecionar algo para limpar.");
DEFINE("LDPU_CLEAN_INVENTORY_SUCCESS_ITEM_CLEAR", "Itens do personagem %s apagados com sucesso!");
DEFINE("LDPU_CLEAN_INVENTORY_SUCCESS_ITEM_CLEAR_LOG", "Itens apagados.");
DEFINE("LDPU_CLEAN_INVENTORY_ERROR_ITEM_CLEAR", "Erro: N&atilde;o foi possivel apagar os itens do personagem, tente novamente mais tarde!");
DEFINE("LDPU_CLEAN_INVENTORY_SUCCESS_MAGICS_CLEAR", "Magias do personagem %s apagados com sucesso!");
DEFINE("LDPU_CLEAN_INVENTORY_SUCCESS_MAGICS_CLEAR_LOG", "Magias apagadas.");
DEFINE("LDPU_CLEAN_INVENTORY_ERROR_MAGICS_CLEAR", "Erro: N&atilde;o foi possivel apagar as magias do personagem, tente novamente mais tarde!");
DEFINE("LDPU_CLEAN_INVENTORY_SUCCESS_ZEN_CLEAR", "Zen do personagem %s apagados com sucesso!");
DEFINE("LDPU_CLEAN_INVENTORY_SUCCESS_ZEN_CLEAR_LOG", "Zen apagados.");
DEFINE("LDPU_CLEAN_INVENTORY_ERROR_ZEN_CLEAR", "Erro: N&atilde;o foi possivel apagar o zen do personagem, tente novamente mais tarde!");

DEFINE("LDPU_MPHOTO_CHARACTER", "Personagem");
DEFINE("LDPU_MPHOTO_CURRENT_PHOTO", "Foto Atual");
DEFINE("LDPU_MPHOTO_REFRESH_PHOTO", "Atualizar Foto");
DEFINE("LDPU_MPHOTO_SUBMIT", "Alterar");
DEFINE("LDPU_MPHOTO_CHOOSE_PHOTO", "Erro: Escolha uma imagem para enviar.");
DEFINE("LDPU_MPHOTO_UPLOAD_ERROR", "Erro: Falha ao efetuar o upload.<br />Codigo:");
DEFINE("LDPU_MPHOTO_MAX_SIZE", "Erro: Envie uma foto que tenha ate 500kbts.");
DEFINE("LDPU_MPHOTO_INVALID_TYPE", "Erro: Tipo de arquivo inválido.");
DEFINE("LDPU_MPHOTO_SUCCESS", "Foto alterada com sucesso.");

DEFINE("LDPU_BUY_VIP_DISABLED_TYPE", "Este plano de vip não está a venda");
DEFINE("LDPU_BUY_VIP_ERROR_TIME", "Erro no tempo de vip");
DEFINE("LDPU_BUY_VIP_NOT_HAVE_CASH", "Você não tem tem saldo para comprar esse pacote de vip.");
DEFINE("LDPU_BUY_VIP_YOU_IS_VIP", "Você é %s, para comprar %s você deve esperar o %s acabar.");
DEFINE("LDPU_BUY_VIP_SUCCESS", "Sucesso: <strong>Sua compra foi efetuada com sucesso.</strong><br />Válidade: <strong>%s</strong><br /><em>Obrigado.");

DEFINE("LDPU_CONFIRM_DEPOSIT_FILL_AMOUNT_CASH", "Você deve escrever a quantia de");
DEFINE("LDPU_CONFIRM_DEPOSIT_FILL_BANK", "Você deve selecionar um banco na lista abaixo.");
DEFINE("LDPU_CONFIRM_DEPOSIT_FILL_DATE", "Você deve escrever a data em que você efetuou o depósito.");
DEFINE("LDPU_CONFIRM_DEPOSIT_FILL_HOUR", "Você deve escrever o horário em que você efetuou o depósito.");
DEFINE("LDPU_CONFIRM_DEPOSIT_FILL_VALUE", "Você deve escrever o valor do depósito.");
DEFINE("LDPU_CONFIRM_DEPOSIT_FILL_PAY_IN", "Você deve preencha o campo: Pago em.");
DEFINE("LDPU_CONFIRM_DEPOSIT_ERROR_LIMIT_CONFIRM_OPEN", "Você pode possuir somente %d confirmações em andamento.");
DEFINE("LDPU_CONFIRM_DEPOSIT_ERROR_FOUND", "Erros encontrados");
DEFINE("LDPU_CONFIRM_DEPOSIT_SUCCESS", "Sua confirmação foi enviada com sucesso!<br/>Aguarde que nossa equipe confirme seu pagamento.<br/>Para ver o status da sua confirmação acesse o link: <a href='?page=paneluser&amp;option=LOG_BUYS&amp;Write=1'>Ver confirmações</a><br/>Obrigado.");

DEFINE("LDPU_COMPLAINT_SUCCESS", "Sua denuncia foi enviada com sucesso.<br/>Obrigado.");
DEFINE("LDPU_COMPLAINT_INVALID_FILE", "Arquivo inválido.");

DEFINE("LDPU_OPEN_TICKET_MAX_TICKET_OPEN", "Você não pode possuir mais de %d em aberto.");
DEFINE("LDPU_OPEN_TICKET_SUCCESS", "Seu ticket foi enviado com sucesso!<br />Para visualizar-lo clique <a href='?page=paneluser&amp;option=READ_TICKET'>aqui</a>.");

DEFINE("LDPU_READ_TICKET_TEXT_ID", "Id");
DEFINE("LDPU_READ_TICKET_TEXT_SUBJECT", "Assunto");
DEFINE("LDPU_READ_TICKET_TEXT_DESCRIPTION", "Descrição");
DEFINE("LDPU_READ_TICKET_TEXT_DATE", "Data");
DEFINE("LDPU_READ_TICKET_TEXT_STATUS", "Status");
DEFINE("LDPU_READ_TICKET_TEXT_STATUS_OPEN", "Aberto");
DEFINE("LDPU_READ_TICKET_TEXT_STATUS_CLOSE", "Encerrado");
DEFINE("LDPU_READ_TICKET_TEXT_VIEW_TICKET", "Visualizar Ticket");
DEFINE("LDPU_READ_TICKET_TEXT_TICKET_NOT_FOUND", "Erro: Esse ticket não pertence a sua conta ou não existe.");
DEFINE("LDPU_READ_TICKET_TEXT_HISTORY", "Histórico do ticket");
DEFINE("LDPU_READ_TICKET_TEXT_NO_HISTORY", "Esse Ticket não tem nenhum histórico de respostas.");
DEFINE("LDPU_READ_TICKET_TEXT_RESPONSE_BY", "Resposta por");
DEFINE("LDPU_READ_TICKET_TEXT_SEND_RESPONSE", "Enviar uma resposta");
DEFINE("LDPU_READ_TICKET_TEXT_SUBMIT", "Enviar");

DEFINE("LDPU_SEND_SMS_ERROR", "Erro, Tente novamente dentro de alguns instantes.<br/>Obrigado.");
DEFINE("LDPU_SEND_SMS_SUCCESS", "Mensagem Enviada com Sucesso!");
?>