<?php
/**
 * Module:      pt-BR.lang.php
 * Description: This module houses all display text in the Portuguese language.
 * Updated:     November 21, 2022
 *  
 * To translate this file, first make a copy of it and rename it with the 
 * language name in the title.
 * 
 * ==============================
 * 
 * Use ISO 169-2 Standards for and WWW3C Language Tag Standards for naming 
 * of language files. Use the ALPHA-2 letter code whenever possible.
 * 
 * ISO 169-2:
 * @see https://www.loc.gov/standards/iso639-2/php/code_list.php
 * 
 * WWW3 Language Tags:
 * @see https://www.w3.org/International/articles/language-tags/
 * 
 * WWW3 Choosing a Language Tag:
 * @see https://www.w3.org/International/questions/qa-choosing-language-tags
 * 
 * To determine a subtag, go to the IANA Language Subtag Registry:
 * @see http://www.iana.org/assignments/language-subtag-registry
 * 
 * According to the WWW3:
 * 
 * "Always bear in mind that the golden rule is to keep your language tag 
 * as short as possible. Only add further subtags to your language tag if 
 * they are needed to distinguish the language from something else in the 
 * context where your content is used..."
 * 
 * "Unless you specifically need to highlight that you are talking about 
 * Italian as spoken in Italy you should use it 'for Italian, and not 
 * it-IT. The same goes for any other possible combination."
 * 
 * "You should only use a region subtag if it contributes information 
 * needed in a particular context to distinguish this language tag from 
 * another one; otherwise leave it out."
 * 
 * ================ FORMAT =================
 * 
 * Always indicate the primary language subtag first, then a dash (-)
 * and then the region subtag. The region subtag is in all capital letters 
 * or a three digit number.
 * 
 * Examples:
 * en-US
 * English spoken in the United States
 * en is the PRIMARY language subtag
 * US is the REGION subtag (note the capitalization)
 * 
 * es-ES
 * Spanish spoken in Spain
 * 
 * es-419
 * Spanish spoken in Latin America
 * 
 * ========================================
 * 
 * Items that need translation into other languages are housed here in 
 * PHP variables - each start with a dollar sign ($). The words, phrases,
 * etc. (called strings) that need to be translated are housed between 
 * double-quotes ("). Please, ONLY alter the text between the double quotes!
 * 
 * For example, a translated PHP variable would look like this (encoding is utf8mb4; therefore, 
 * accented and other special characters are acceptable):
 * 
 * English (US) before translation:
 * $label_volunteer_info = "Volunteer Info";
 * 
 * Spanish translated:
 * $label_volunteer_info = "Informaci??n de Voluntarios";
 * 
 * Portuguese translated:
 * $label_volunteer_info = "Informa????es Volunt??rio";
 * 
 * ========================================
 * 
 * Please note: the strings that need to be translated MAY contain HTML 
 * code. Please leave this code intact! For example:
 * 
 * English (US):
 * $beerxml_text_008 = "Browse for your BeerXML compliant file on your hard drive and select <em>Upload</em>.";
 * 
 * Spanish:
 * $beerxml_text_008 = "Buscar su archivo compatible BeerXML en su disco duro y haga clic en <em>Cargar</em>.";
 * 
 * Note that the <em>...</em> tags were not altered. Just the word "Upload" 
 * to "Cargar" between those tags.
 * 
 * ==============================
 * 
 */

/**
 * Set up PHP variables. No translations in this section.
 */

include (INCLUDES.'url_variables.inc.php');

if (isset($entry_open)) $entry_open = $entry_open;
else $entry_open = "";

if (isset($judge_open)) $judge_open = $judge_open;
else $judge_open = "";

if (isset($judge_closed)) $judge_closed = $judge_closed;
else $judge_closed = "";

if (isset($reg_open)) $reg_open = $reg_open;
else $reg_open = "";

if (isset($total_entries)) $total_entries = $total_entries;
else $total_entries = "";

if (isset($current_time)) $current_time = $current_time;
else $current_time = "";

if (isset($current_time)) $current_time = $current_time;
else $current_time = "";

if (isset($row_limits['prefsEntryLimit'])) $row_limits['prefsEntryLimit'] = $row_limits['prefsEntryLimit'];
else $row_limits['prefsEntryLimit'] = "";

if (isset($row_limits['prefsEntryLimitPaid'])) $row_limits['prefsEntryLimitPaid'] = $row_limits['prefsEntryLimitPaid'];
else $row_limits['prefsEntryLimitPaid'] = "";

$php_version = phpversion();

/**
 * ------------------------------------------------------------------------
 * BEGIN TRANSLATIONS BELOW!
 * ------------------------------------------------------------------------
 */

$j_s_text = "";
if (strpos($section, "step") === FALSE) {
    if ((isset($judge_limit)) && (isset($steward_limit))) {
        if (($judge_limit) && (!$steward_limit)) $j_s_text = "Steward"; // missing punctuation intentional
        elseif ((!$judge_limit) && ($steward_limit)) $j_s_text = "Judge"; // missing punctuation intentional
        else $j_s_text = "Judge or steward"; // missing punctuation intentional
    }
}

$label_home = "Home";
$label_welcome = "Benvindo";
$label_comps = "Diret??rio da Competi????o";
$label_info = "Info";
$label_volunteers = "Volunt??rios";
$label_register = "Registrar";
$label_help = "Ajuda";
$label_print = "Imprimir";
$label_my_account = "Minha Conta";
$label_yes = "Sim";
$label_no = "N??o";
$label_low_none = "Baixo/Nenhum";
$label_low = "Baixo";
$label_med = "M??dio";
$label_high = "Alto";
$label_pay = "Pagar Inscri????o da Amostra";
$label_reset_password = "Resetar Password";
$label_log_in = "Log In";
$label_logged_in = "Logado";
$label_log_out = "Log Out";
$label_logged_out = "Deslogado";
$label_sponsors = "Patrocinadores";
$label_rules = "Regras";
$label_volunteer_info = "Informa????es de Volunt??rios";
$label_reg = $label_register;
$label_judge_reg = "Registro de Juiz";
$label_steward_reg = "Registro de Auxiliares";
$label_past_winners = "Vencedores Anteriores";
$label_contact = "Contato";
$label_style = "Estilo";
$label_entry = "Amostra";
$label_add_entry = "Adicionar Amostra";
$label_edit_entry = "Editar Amostra";
$label_upload = "Upload";
$label_bos = "Best of Show";
$label_brewer = "Cervejeiro";
$label_cobrewer = "Co-Cervejeiro";
$label_entry_name = "Nome da Amostra";
$label_required_info = "Informa????o Necess??ria";
$label_character_limit = " limite de caracteres - use palavras-chaves e abrevia????es se o espa??o for limitado.<br>Characteres usados: ";
$label_carbonation = "Carbonata????o";
$label_sweetness = "Dul??or";
$label_strength = "For??a";
$label_color =  "Cor";
$label_table = "Mesa";
$label_standard = "Standard";
$label_super = "Super";
$label_session = "Session";
$label_double = "Double";
$label_blonde = "Blonde";
$label_amber = "Amber";
$label_brown = "Brown";
$label_pale = "Pale";
$label_dark = "Dark";
$label_hydromel = "Hidromel";
$label_sack = "Sack";
$label_still = "Still";
$label_petillant = "Petillant";
$label_sparkling = "Sparkling";
$label_dry = "Dry";
$label_med_dry = "Medium Dry";
$label_med_sweet = "Medium Sweet";
$label_sweet = "Sweet";
$label_brewer_specifics = "Especificidades do Cervejeiro";
$label_general = "Geral";
$label_amount_brewed = "Quantidade Brassada";
$label_specific_gravity = "Gravidade Espec??fica";
$label_fermentables = "Ferment??veis";
$label_malt_extract = "Extrato de Malte";
$label_grain = "Gr??os";
$label_hops = "L??pulos";
$label_hop = "L??pulo";
$label_mash = "Mash";
$label_steep = "Steep";
$label_other = "Outro";
$label_weight = "Peso";
$label_use = "Uso";
$label_time = "Tempo";
$label_first_wort = "First Wort";
$label_boil = "Fervura";
$label_aroma = "Aroma";
$label_dry_hop = "Dry Hop";
$label_type = "Tipo";
$label_bittering = "Bittering";
$label_both = "Ambos";
$label_form = "Forma";
$label_whole = "Flor";
$label_pellets = "Pellets";
$label_plug = "Plug";
$label_extract = "Extrato";
$label_date = "Data";
$label_bottled = "Engarrafado";
$label_misc = "Miscellaneous";
$label_minutes = "Minutos";
$label_hours = "Horas";
$label_step = "Passos";
$label_temperature = "Temperatura";
$label_water = "??gua";
$label_amount = "Quantidade";
$label_yeast = "Fermento";
$label_name = "Nome";
$label_manufacturer = "Fabricante";
$label_nutrients = "Nutrientes";
$label_liquid = "L??quido";
$label_ale = "Ale";
$label_lager = "Lager";
$label_wine = "Wine";
$label_champagne = "Champagne";
$label_boil = "Fervura";
$label_fermentation = "Fermenta????o";
$label_finishing = "Finishing";
$label_finings = "Finings";
$label_primary = "Primary";
$label_secondary = "Secondary";
$label_days = "Dias";
$label_forced = "Carbonata????o For??ada";
$label_bottle_cond = "Refermenta????o na garrafa";
$label_volume = "Volume";
$label_og = "Gravidade Original";
$label_fg = "Gravidade Final";
$label_starter = "Starter";
$label_password = "Senha";
$label_judging_number = "N??mero para Julgamento";
$label_check_in = "Check In da Amostra";
$label_box_number = "N??mero da Caixa";
$label_first_name = "Nome";
$label_last_name = "Sobrenome";
$label_secret_01 = "Qual ?? a sua cerveja favorita de todos os tempos?";
$label_secret_02 = "Qual foi o nome do seu primeiro animal de estima????o?";
$label_secret_03 = "Qual era o nome da rua em que voc?? cresceu?";
$label_secret_04 = "Qual era o nome do bairro em que voc?? nasceu?";
$label_security_answer = "Resposta da Pergunta de Seguran??a";
$label_security_question = "Pergunta de seguran??a";
$label_judging = "Julgando";
$label_judge = "Juiz";
$label_steward = "Auxiliar";
$label_account_info = "Detalhes da Conta";
$label_street_address = "Endere??o - Rua";
$label_address = "Endere??o";
$label_city = "Cidade";
$label_state_province = "Estado";
$label_zip = "CEP";
$label_country = "Pa??s";
$label_phone = "Telefone";
$label_phone_primary = "Telefone Prim??rio";
$label_phone_secondary = "Telefone Secund??rio";
$label_drop_off = "Local para entrega presencial de";
$label_drop_offs = "Locais para entrega presencial de";
$label_club = "Clube";
$label_aha_number = "AHA Member Number";
$label_org_notes = "Observa????es para os Organizadores";
$label_avail = "Disponibilidade";
$label_location = "Local";
$label_judging_avail = "Disponibilidade para Sess??o de Julgamento";
$label_stewarding = "Stewarding";
$label_stewarding_avail = "Disponibilidade para Auxiliar a Sess??o de Julgamento";
$label_bjcp_id = "BJCP ID";
$label_bjcp_mead = "Juiz de Hidromel";
$label_bjcp_rank = "BJCP Rank";
$label_designations = "Designa????es";
$label_judge_sensory = "Juiz com Treinamento Sensorial";
$label_judge_pro = "Cervejeiro Profissional";
$label_judge_comps = "Competi????es Julgadas";
$label_judge_preferred = "Estilos Preferidos";
$label_judge_non_preferred = "Estilos N??o-Preferidos";
$label_waiver = "Waiver";
$label_add_admin = "Adicionar Detalhes do Administrador";
$label_add_account = "Adicionar Detalhes do Usu??rio";
$label_edit_account = "Editar Detalhes do Usu??rio";
$label_entries = "Amostras";
$label_confirmed = "Confirmadas";
$label_paid = "Pagas";
$label_updated = "Atualizadas";
$label_mini_bos = "Mini-BOS";
$label_actions = "A????es";
$label_score = "Pontua????o";
$label_winner = "Vencedor?";
$label_change_email = "Alterar Email";
$label_change_password = "Alterar Senha";
$label_add_beerXML = "Adicionar Amostra Usando BeerXML";
$label_none_entered = "Nenhuma entrada";
$label_none = "Nenhuma";
$label_discount = "Desconto";
$label_subject = "Assunto";
$label_message = "Mensagem";
$label_send_message = "Enviar Mensagem";
$label_email = "Endere??o de Email";
$label_account_registration = "Registro de usu??rio";
$label_entry_registration = "Inscri????o de amostra";
$label_entry_fees = "Taxas das Amostras";
$label_entry_limit = "Limite de Amostras";
$label_entry_info = "Detalhes da Amostra";
$label_entry_per_entrant = "Limite de Amostras por Participante";
$label_categories_accepted = "Estilos Aceitos";
$label_judging_categories = "Categorias de Julgamento";
$label_entry_acceptance_rules = "Regras para Aceita????o da Amostra";
$label_shipping_info = "Detalhes do Envio";
$label_packing_shipping = "Embalando e Enviando";
$label_awards = "Premia????o";
$label_awards_ceremony = "Cerim??nia de Premia????o";
$label_circuit = "Qualifica????o do Circuito";
$label_hosted = "Hosted Edition";
$label_entry_check_in = "Check-In de Amostra";
$label_cash = "Dinheiro";
$label_check = "Cheque";
$label_pay_online = "Pagamento Online";
$label_cancel = "Cancelar";
$label_understand = "Eu entendi";
$label_fee_discount = "Desconto da taxa da Amostra";
$label_discount_code = "C??digo de Desconto";
$label_register_judge = "Voc?? est?? se registrando como Participante, Juiz ou Auxiliar?";
$label_register_judge_standard = "Registrar como Juiz ou Auxiliar (Standard)";
$label_register_judge_quick = "Registrar como Juiz ou Auxiliar (Quick)";
$label_all_participants = "Todos os Participantes";
$label_open = "Aberto";
$label_closed = "Fechado";
$label_judging_loc = "Locais e Datas das Sess??es de Julgamento";
$label_new = "Novo";
$label_old = "Antigo";
$label_sure = "Voc?? tem certeza?";
$label_judges = "Ju??zes";
$label_stewards = "Auxiliar";
$label_staff = "Coordena????o";
$label_category = "Categoria";
$label_delete = "Apagar";
$label_undone = "Esta a????o n??o pode ser desfeita";
$label_bitterness = "Amargor";
$label_close = "Fechar";
$label_custom_style = "Estilo Personalizado";
$label_custom_style_types = "Tipos de Estilos Personalizados";
$label_assigned_to_table = "Atribu??da ?? Mesa";
$label_organizer = "Organizador";
$label_by_table = "Por Mesa";
$label_by_category = "Por Estilo";
$label_by_subcategory = "Por Sub-Estilo";
$label_by_last_name = "Pelo Sobrenome";
$label_by_table = "Por Mesa";
$label_by_location = "Pela Localidade da Sess??o";
$label_shipping_entries = "Envio das Amostras"; //
$label_no_availability = "Sem Disponibilidade Definida";
$label_error = "Erro";
$label_round = "Rodada";
$label_flight = "Flight";
$label_rounds = "Rodadas";
$label_flights = "Flights";
$label_sign_in = "Sign In";
$label_signature = "Assinatura";
$label_assignment = "Tarefas";
$label_assignments = "Tarefas";
$label_letter = "Carta";
$label_re_enter = "Re-Entrar";
$label_website = "Website";
$label_place = "Local";
$label_cheers = "Cheers";
$label_count = "Contagem";
$label_total = "Total";
$label_participant = "Participante";
$label_entrant = "Competidor";
$label_received = "Recebido";
$label_please_note = "Preste Aten????o";
$label_pull_order = "Pull Order";
$label_box = "Caixa";
$label_sorted = "Ordenado";
$label_subcategory = "Subcategoria";
$label_affixed = "Etiqueta Afixada?";
$label_points = "Pontos";
$label_comp_id = "BJCP Competition ID";
$label_days = "Dias";
$label_sessions = "Sess??es";
$label_number = "N??mero";
$label_more_info = "Mais Detalhes";
$label_entry_instructions = "Instru????es da Amostra";
$label_commercial_examples = "Exemplos Comerciais";
$label_users = "Usu??rios";
$label_participants = "Participantes";
$label_please_confirm = "Favor Confirmar";
$label_undone = "Esta a????o n??o pode ser desfeita.";
$label_data_retain = "Dados para Reter";
$label_comp_portal = "Diret??rio da Concurso";
$label_comp = "Concurso";
$label_continue = "Continuar";
$label_host = "Host";
$label_closing_soon = "Termina em Breve";
$label_access = "Accesso";
$label_length = "Comprimento";

$label_admin = "Administra????o";
$label_admin_short = "Admin";
$label_admin_dashboard = "Dashboard";
$label_admin_judging = $label_judging;
$label_admin_stewarding = "Auxiliando";
$label_admin_participants = $label_participants;
$label_admin_entries = $label_entries;
$label_admin_comp_info = "Detalhes do Concurso";
$label_admin_web_prefs = "Prefer??ncias do Website";
$label_admin_judge_prefs = "Prefer??ncias da Organiza????o do Concurso";
$label_admin_archives = "Arquivos";
$label_admin_style = $label_style;
$label_admin_styles = "Estilos";
$label_admin_dropoff = $label_drop_offs;
$label_admin_judging_loc = $label_judging_loc;
$label_admin_contacts = "Contatos";
$label_admin_tables = "Mesas";
$label_admin_scores = "Scores";
$label_admin_bos = $label_bos;
$label_admin_bos_acr = "BOS";
$label_admin_style_types = "Tipos de Estilo";
$label_admin_custom_cat = "Categorias Personalizadas";
$label_admin_custom_cat_data = "Amostras da Categoria Personalizada";
$label_admin_sponsors = $label_sponsors;
$label_admin_entry_count = "Contagem de Amostras por Estilo";
$label_admin_entry_count_sub = "Contagem de Amostras por Sub-Estilo";
$label_admin_custom_mods = "Custom Modules";
$label_admin_check_in = $label_entry_check_in;
$label_admin_make_admin = "Alterar User Level";
$label_admin_register = "Registrar um Participante";
$label_admin_upload_img = "Upload Images";
$label_admin_upload_doc = "Upload Scoresheets e outros Documentos";
$label_admin_password = "Alterar a Senha de Usu??rio";
$label_admin_edit_account = "Editar Conta de Usu??rio";

$label_account_summary = "Resumo da Minha Conta";
$label_confirmed_entries = "Amostras Confirmadas";
$label_unpaid_confirmed_entries = "Amostras Confirmadas e N??O Pagas";
$label_total_entry_fees = "Total das taxas";
$label_entry_fees_to_pay = "Taxas n??o pagas";
$label_entry_drop_off = "Entrega presencial";
$label_maintenance = "Manuten????o";
$label_judge_info = "Detalhes do Juiz";
$label_cellar = "Meu Por??o";
$label_verify = "Verificar";
$label_entry_number = "N??mero da Amostra";

$header_text_000 = "A Instala????o foi bem sucedida.";
$header_text_001 = "Voc?? agora est?? logado e pronto para customizar o site do Concurso.";
$header_text_002 = "Entretanto, as permiss??es do config.php n??o puderam ser alteradas.";
$header_text_003 = "?? altamente recomendado que voc?? mude as permiss??es (chmod) do arquivo config.php para 555. Voc?? ter?? que acessar o arquivo no seu servidor para fazer isso.";
$header_text_004 = "Adicionalmente, a vari??vel &#36;setup_free_access no config.php est?? marcada como TRUE. Por raz??es de seguran??a, voc?? deve alter??-la para FALSE. Ser?? preciso editar o arquivo config.php.";
$header_text_005 = "Detalhes adicionados com sucesso.";
$header_text_006 = "Detalhes editados com sucesso.";
$header_text_007 = "Ocorreu um erro.";
$header_text_008 = "Tente novamente.";
$header_text_009 = "Voc?? precisa ser um administrador para acessar fun????es administrativas.";
$header_text_010 = "Alterar";
$header_text_011 = $label_email;
$header_text_012 = $label_password;
$header_text_013 = "O endere??o de email j?? est?? em uso. Por favor, insira um outro endere??o.";
$header_text_014 = "Houve um problema com a ??ltima requisi????o, favor tentar novamente.";
$header_text_015 = "Sua senha atual est?? incorreta.";
$header_text_016 = "Favor informar um endere??o de email.";
$header_text_017 = "Desculpe, houve um problema com a sua ??ltima tentativa de login.";
$header_text_018 = "Desculpe, o nome de usu??rio j?? est?? em uso.";
$header_text_019 = "J?? verificou se voc?? j?? criou uma conta?";
$header_text_020 = "Se sim, fa??a login aqui.";
$header_text_021 = "O nome de usu??rio n??o ?? um email v??lido.";
$header_text_022 = "Favor inserir um endere??o de email v??lido.";
$header_text_023 = "CAPTCHA malsucedido.";
$header_text_024 = "Os endere??os de email inseridos n??o s??o iguais.";
$header_text_025 = "The AHA number you entered is already in the system.";
$header_text_026 = "O seu pagamento online foi recebido e a transa????o foi completada. Aguarde alguns minutos para que o status do pagamento seja atualizado aqui - atualize a p??gina ou acesse a sua lista de amostras. Voc?? receber?? um recibo por email do PayPal.";
$header_text_027 = "N??o esque??a de imprimir o recibo e anexar a uma das suas amostras como comprovante de pagamento.";
$header_text_028 = "O seu pagamento online foi cancelado.";
$header_text_029 = "O c??digo foi verificado.";
$header_text_030 = "Desculpe, mas o c??digo inserido est?? incorreto.";
$header_text_031 = "Voc?? deve estar logado e ser admin para acessar as fun????es administrativas.";
$header_text_032 = "Desculpe, houve um problema com a sua ??ltima tentativa de login.";
$header_text_033 = "Certifique-se que o seu email e senha est??o corretos.";
$header_text_034 = "Um c??digo para resetar a sua senha foi gerado e enviado ao seu email.";
$header_text_035 = "- agora voc?? pode logar com a sua nova senha.";
$header_text_036 = "Voc?? saiu.";
$header_text_037 = "Logar novamente?";
$header_text_038 = "Suas perguntas de verifica????o n??o coincidem com o que est?? no banco de dados.";
$header_text_039 = "Your ID verification information has been sent to the email address associated with your account.";
$header_text_040 = "Sua mensagem foi enviada para";
$header_text_041 = $header_text_023;
$header_text_042 = "Seu endere??o de email foi atualizado.";
$header_text_043 = "Sua senha foi atualizada.";
$header_text_044 = "Detalhes apagados com sucesso.";
$header_text_045 = "Voc?? deve verificar todas as suas amostras importadas usando BeerXML.";
$header_text_046 = "Voc?? se registrou.";
$header_text_047 = "Voc?? alcan??ou o limite de amostras.";
$header_text_048 = "Sua amostra n??o foi adicionada.";
$header_text_049 = "Voc?? alcan??ou o limite de amostras para a subcategoria.";
$header_text_050 = "Set Up: Instalar tabelas e dados na DB";
$header_text_051 = "Set Up: Criar Usu??rio Admin";
$header_text_052 = "Set Up: Adicionar Detalhes do Admin";
$header_text_053 = "Set Up: Configurar Website";
$header_text_054 = "Set Up: Adicionar Detalhes do Concurso";
$header_text_055 = "Set Up: Adicionar Locais de Julgamento";
$header_text_056 = "Set Up: Adicionar Locais de Recebimento";
$header_text_057 = "Set Up: Designar Estilos Aceitos";
$header_text_058 = "Set Up: Configurar Julgamento";
$header_text_059 = "Importar Amostra Usando BeerXML";
$header_text_060 = "Sua amostra foi gravada.";
$header_text_061 = "Sua amostra foi confirmada.";
$header_text_065 = "Todas as amostras recebidas foram verificadas e aquelas n??o atribu??das a mesas foram atribu??das.";
$header_text_066 = "Detalhes atualizados com sucesso.";
$header_text_067 = "O sufixo inserido j?? est?? em uso, favor escolher um diferente.";
$header_text_068 = "Os dados da concurso especificado foram limpos.";
$header_text_069 = "Arquivos criados com sucesso. ";
$header_text_070 = "Clique no nome do arquivo para v??-lo.";
$header_text_071 = "Lembre-se de atualizar o seu ".$label_admin_comp_info." e o seu ".$label_admin_judging_loc." se voc?? estiver iniciando uma nova competi????o.";
$header_text_072 = "Arquivo \"".$filter."\" apagado.";
$header_text_073 = "Os registros foram atualizados.";
$header_text_074 = "O nome de usu??rio inserido j?? est?? em uso.";
$header_text_075 = "Adicionar outro local de recebimento?";
$header_text_076 = "Adicionar novo local de julgamento, data ou hora?";
$header_text_077 = "A mesa definida n??o tem estilos associados.";
$header_text_078 = "Um ou mais campos obrigat??rios est??o faltando - marcados em vermelho abaixo.";
$header_text_079 = "O endere??o de email inserido n??o ?? igual.";
$header_text_080 = "The AHA number you entered is already in the system.";
$header_text_081 = "Todas as amostras foram marcadas como pagas.";
$header_text_082 = "Todas as amostras foram marcadas como recebidas.";
$header_text_083 = "Todas as amostras n??o confirmadas est??o agora marcadas como confirmadas.";
$header_text_084 = "Todas as tarefas do participante foram cumpridas.";
$header_text_085 = "O n??mero de julgamento inserido n??o foi encontrado no banco de dados.";
$header_text_086 = "All entry styles have been converted from BJCP 2008 to BJCP 2015.";
$header_text_087 = "Dados apagados com sucesso.";
$header_text_088 = "O juiz/auxiliar foi adicionado com sucesso. Lembre-se de adicionar o usu??rio como juiz ou auxiliar antes de atribu??-lo a mesas.";
$header_text_089 = "O arquivo foi enviado com sucesso. Veja a lista para verificar.";
$header_text_090 = "O tipo do arquivo enviado n??o ?? aceito pelo sistema.";
$header_text_091 = "Arquivo(s) apagados com sucesso.";
$header_text_092 = "O email teste foi gerado. Verifique tamb??m a sua pasta de spam.";
$header_text_093 = "A senha do usu??rio foi alterada. Certifique-se de inform??-lo da nova senha!";
$header_text_094 = "A altera????o das permiss??es da pasta user_images para 755 falhou.";
$header_text_095 = "You will need to change the folder&rsquo;s permission manually. Consult your FTP program or ISP&rsquo;s documentation for chmod (folder permissions).";
$header_text_096 = "Os n??meros de julgamento foram gerados novamente.";
$header_text_097 = "Sua instala????o foi conclu??da com sucesso!";
$header_text_098 = "Por RAZ??ES DE SEGURAN??A voc?? deve alterar imediatamente a vari??vel &#36;setup_free_access no config.php para FALSE.";
$header_text_099 = "Caso contr??rio, sua instala????o e o seu servidor estar??o vulner??veis brechas de seguran??a.";
$header_text_100 = "Fa??a Login agora para acessar o Painel de Administra????o";
$header_text_101 = "Sua instala????o foi atualizada com sucesso!";
$header_text_102 = "Os endere??os de email n??o correspondem.";
$header_text_103 = "Por favor, fa??a o login para acessar sua conta.";
$header_text_104 = "Voc?? n??o tem privil??gios de acesso suficientes para visualizar esta p??gina.";
$header_text_105 = "Mais informa????es s??o necess??rias para que sua inscri????o seja aceita e confirmada.";
$header_text_106 = "Veja a (s) ??rea (s) destacada (s) em RED abaixo.";
$header_text_107 = "Por favor, escolha um estilo.";
$header_text_108 = "Esta amostra n??o pode ser aceita ou confirmada at?? que um estilo tenha sido escolhido. Amostras n??o confirmadas podem ser deletadas do sistema sem aviso pr??vio.";
$header_text_109 = "Voc?? se registrou como administrador.";
$header_text_110 = "Todas as amostras foram marcadas como pagas.";
$header_text_111 = "Todas as amostras foram marcadas como recebidas.";

$alert_text_000 = "Conceda acesso de administrador e administrador de n??vel superior aos usu??rios com cautela.";
$alert_text_001 = "Limpeza de dados conclu??da.";
$alert_text_002 = "A vari??vel setup_free_access em config.php est?? atualmente definida como TRUE.";
$alert_text_003 = "Por raz??es de seguran??a, a configura????o deve retornar para FALSE. Voc?? precisar?? editar o arquivo config.php diretamente e recarregar o arquivo para o seu servidor.";
$alert_text_005 = "Nenhum local de entrega foi especificado.";
$alert_text_006 = "Adicionar um local de entrega?";
$alert_text_008 = "Nenhuma data/localiza????o de julgamento foi especificada.";
$alert_text_009 = "Adicionar um local de julgamento?";
$alert_text_011 = "Nenhum contato de competi????o foi especificado.";
$alert_text_012 = "Adicionar um contato de competi????o?";
$alert_text_014 = "Seu conjunto de estilos atual ?? BJCP 2008.";
$alert_text_015 = "Voc?? deseja converter todas as amostras para o BJCP 2015?";
$alert_text_016 = "Tem certeza? Esta a????o converter?? todas as amostras no banco de dados para estar em conformidade com as diretrizes de estilo do BJCP 2015. As categorias ser??o 1:1 sempre que poss??vel, no entanto, alguns estilos especiais podem precisar ser atualizados pelo participante.";
$alert_text_017 = "Para manter a funcionalidade, a convers??o deve ser executada <em>antes</em> de definir tabelas.";
$alert_text_019 = "Todas as amostras n??o confirmadas foram apagadas da base de dados.";
$alert_text_020 = "As amostras n??o confirmadas s??o destacadas e denotadas com um ??cone <span class =\"fa-lg fa-lg-exclamation-triangle text-danger\"></span>abaixo.";
$alert_text_021 = "Os propriet??rios dessas amostras devem ser contatados. Essas amostras n??o est??o inclu??das nos c??lculos de taxas.";
$alert_text_023 = "Adicionar um local de entrega?";
$alert_text_024 = $label_yes;
$alert_text_025 = $label_no;
$alert_text_027 = "O registro da inscri????o ainda n??o foi aberto.";
$alert_text_028 = "O registro da inscri????o foi encerrado.";
$alert_text_029 = "Adicionar amostras n??o est?? dispon??vel.";
$alert_text_030 = "O limite de amostras da competi????o foi atingido.";
$alert_text_031 = "Seu limite pessoal de amostras foi atingido.";
$alert_text_032 = "Voc?? poder?? adicionar amostras a partir de ".$entry_open.".";
$alert_text_033 = "O registro da conta ser?? aberto em ".$reg_open.".";
$alert_text_034 = "Por favor, retorne para registrar sua conta.";
$alert_text_036 = "O registro da inscri????o ser?? aberto em ".$entry_open.".";
$alert_text_037 = "Por favor, retorne para adicionar suas amostras ao sistema.";
$alert_text_039 = "O registro de juiz e assistente ser?? aberto em ".$judge_open.".";
$alert_text_040 = "Por favor, retorne para registrar-se como juiz ou mordomo.";
$alert_text_042 = "Inscri????es abertas!";
$alert_text_043 = "Um total de ".$total_entries. " amostras foram adicionadas ao sistema a partir de ".$current_time.".";
$alert_text_044 = "O registro ser?? fechado";
$alert_text_046 = "O limite de amostras quase foi alcan??ado!";
$alert_text_047 = $total_entries." de ".$row_limits ['prefsEntryLimit']." amostras foram adicionadas ao sistema a partir de ".$current_time.".";
$alert_text_049 = "O limite de amostras foi atingido.";
$alert_text_050 = "O limite de ".$row_limits ['prefsEntryLimit']. " amostras foi atingido. Nenhuma outra amostra ser?? aceita.";
$alert_text_052 = "O limite de amostras pagas foi atingido.";
$alert_text_053 = "O limite de ".$row_limits ['prefsEntryLimitPaid']. " amostras <em>pagas</em> foi atingido. Nenhuma outra amostra ser?? aceita.";
$alert_text_055 = "O registro est?? fechado.";
$alert_text_056 = "Se voc?? j?? registrou uma conta,";
$alert_text_057 = "fa??a o login aqui"; // letras min??sculas e falta de pontua????o intencional
$alert_text_059 = "O registro da inscri????o est?? fechado.";
$alert_text_060 = "Um total de ". $total_entries. " amostras foram adicionadas ao sistema.";
$alert_text_062 = "A entrega presencial de amostra est?? encerrada.";
$alert_text_063 = "Garrafas de amostra n??o s??o mais aceitas nos locais de entrega.";
$alert_text_065 = "O envio de amostras por correios est?? encerrado.";
$alert_text_066 = "Garrafas de amostra n??o s??o mais aceitas no local de entrega.";
$alert_text_068 = $j_s_text. "registro aberto.";
$alert_text_069 = "Registre-se aqui"; // falta de pontua????o intencional
$alert_text_070 = $j_s_text. "o registro ser?? fechado". $judge_closed. ".";
$alert_text_072 = "O limite de ju??zes registrados foi atingido.";
$alert_text_073 = "O registro de ju??zes est?? encerrado.";
$alert_text_074 = "O registro como comiss??rio ainda est?? dispon??vel.";
$alert_text_076 = "O limite de administradores registrados foi atingido.";
$alert_text_077 = "O registro de assistentes est?? encerrado.";
$alert_text_078 = "O registro como juiz ainda est?? dispon??vel.";
$alert_text_080 = "Senha incorreta.";
$alert_text_081 = "Senha aceita.";

$alert_email_valid = "O formato de email ?? v??lido!";
$alert_email_not_valid = "O formato de email n??o ?? v??lido!";
$alert_email_in_use = "O endere??o de email que voc?? digitou j?? est?? em uso. Por favor, escolha outro.";
$alert_email_not_in_use = "Parab??ns! O endere??o de e-mail que voc?? digitou n??o est?? em uso.";

$comps_text_000 = "Escolha a competi????o que voc?? deseja acessar na lista abaixo.";
$comps_text_001 = "Competi????o atual:";
$comps_text_002 = "N??o h?? competi????es com janelas de amostras abertas agora.";
$comps_text_003 = "N??o h?? competi????es com janelas de amostras fechando nos pr??ximos 7 dias.";

$beerxml_text_000 = "Importar amostras n??o est?? dispon??vel.";
$beerxml_text_001 = "foi enviado e o brew foi adicionado ?? sua lista de amostras.";
$beerxml_text_002 = "Desculpe, este tipo de arquivo n??o pode ser enviado. Somente extens??es de arquivo .xml s??o permitidas.";
$beerxml_text_003 = "O tamanho do arquivo ?? superior a 2MB. Ajuste o tamanho e tente novamente.";
$beerxml_text_004 = "Arquivo inv??lido especificado.";
$beerxml_text_005 = "No entanto, ele n??o foi confirmado. Para confirmar sua amostra, acesse sua lista de amostras para mais instru????es. Ou, voc?? pode adicionar outra amostra com o BeerXML abaixo.";
$beerxml_text_006 = "A vers??o do PHP do seu servidor n??o suporta o recurso de importa????o BeerXML.";
$beerxml_text_007 = "?? necess??ria a vers??o 5.x ou superior do PHP & mdash; este servidor est?? executando a vers??o do PHP". $php_version. ".";
$beerxml_text_008 = "Procure seu arquivo compat??vel com BeerXML no seu disco r??gido e clique em <em> Upload </em>.";
$beerxml_text_009 = "Escolha o arquivo BeerXML";
$beerxml_text_010 = "Nenhum arquivo escolhido ...";
$beerxml_text_011 = "amostras adicionadas"; // letras min??sculas e falta de pontua????o intencional
$beerxml_text_012 = "amostra adicionada"; // letras min??sculas e falta de pontua????o intencional

$brew_text_000 = "Clique para detalhes sobre o estilo"; // falta de pontua????o intencional
$brew_text_001 = "Os ju??zes n??o saber??o o nome da sua amostra.";
$brew_text_002 = "[desativado - limite de amostra do estilo atingido]"; // falta de pontua????o intencional
$brew_text_003 = "[desativado - limite de amostra do estilo alcan??ado para o usu??rio]"; // falta de pontua????o intencional
$brew_text_004 = "Tipo espec??fico, ingredientes especiais, estilo cl??ssico, for??a (para estilos de cerveja) e / ou cor s??o necess??rios.";
$brew_text_005 = "For??a necess??ria"; // falta de pontua????o intencional
$brew_text_006 = "N??vel de carbonata????o necess??rio"; // falta de pontua????o intencional
$brew_text_007 = "N??vel de do??ura necess??rio"; // falta de pontua????o intencional
$brew_text_008 = "Este estilo requer que voc?? forne??a informa????es espec??ficas para a amostra.";
$brew_text_009 = "Requisitos para"; // falta de pontua????o intencional
$brew_text_010 = "Este estilo requer mais informa????es. Por favor, entre na ??rea fornecida.";
$brew_text_011 = "O nome da amostra ?? obrigat??rio.";
$brew_text_012 = "*** N??O REQUERIDO *** Forne??a APENAS se voc?? deseja que os ju??zes considerem completamente o que voc?? escreve aqui ao avaliar e pontuar sua inscri????o. Use para registrar detalhes que voc?? gostaria que os ju??zes considerassem ao avaliar sua inscri????o que voc?? N??O ESPECIFICAR em outros campos (por exemplo, t??cnica de mostura, variedade de l??pulo, variedade de mel, variedade de uva, variedade de p??ra, etc.). ";
$brew_text_013 = "N??O use este campo para especificar ingredientes especiais, estilo cl??ssico, for??a (para amostras de cerveja) ou cor.";
$brew_text_014 = "Forne??a apenas se desejar que os ju??zes considerem totalmente o que voc?? especificar ao avaliar e pontuar sua inscri????o.";
$brew_text_015 = "Tipo de extrato (por exemplo, claro, escuro) ou marca.";
$brew_text_016 = "Tipo de gr??o (por exemplo, pilsner, pale ale, etc.)";
$brew_text_017 = "Tipo de ingrediente ou nome.";
$brew_text_018 = "Nome do l??pulo";
$brew_text_019 = "Somente n??meros (por exemplo, 12.2, 6.6, etc.)";
$brew_text_020 = "Nome da linhagem (por exemplo, 1056 American Ale).";
$brew_text_021 = "Wyeast, White Labs, etc.";
$brew_text_022 = "1 smackpack, 2 frascos, 2000 ml, etc.";
$brew_text_023 = "Fermenta????o prim??ria em dias.";
$brew_text_024 = "Descanso de sacarifica????o, etc.";
$brew_text_025 = "Fermenta????o secund??ria em dias.";
$brew_text_026 = "Outra fermenta????o em dias.";

$brewer_text_000 = "Por favor digite apenas <em> um </em> nome da pessoa.";
$brewer_text_001 = "Escolha uma. Esta quest??o ser?? usada para verificar sua identidade caso voc?? esque??a sua senha.";
$brewer_text_003 = "Para ser considerado para uma oportunidade GABF Pro-Am voc?? deve ser um membro da AHA.";
$brewer_text_004 = "Forne??a qualquer informa????o que voc?? acredite que o organizador da competi????o deva conhecer (por exemplo, alergias, restri????es alimentares especiais, tamanho da camisa, etc.)";
$brewer_text_005 = "N??o Aplic??vel";
$brewer_text_006 = "Voc?? est?? disposto e qualificado para servir como juiz nesta competi????o?";
$brewer_text_007 = "Voc?? passou no exame BJCP Mead Judge?";
$brewer_text_008 = "* A classifica????o <em> N??o-BJCP </em> ?? para aqueles que n??o fizeram o Exame de Admiss??o ao Juiz de Cerveja BJCP, e n??o s??o <em> uma cervejaria profissional.";
$brewer_text_009 = "** A classifica????o <em> Provis??ria </em> ?? para aqueles que passaram e passaram no Exame BJCP Beer Judge, mas ainda n??o fizeram o Exame de Julgamento de Cerveja BJCP.";
$brewer_text_010 = "Apenas as duas primeiras designa????es aparecer??o nos seus r??tulos impressos em planilhas.";
$brewer_text_011 = "Quantas competi????es voc?? j?? serviu como um <strong>".strtolower ($label_judge)."</ strong>?";
$brewer_text_012 = "Somente para prefer??ncias. Deixar um estilo desmarcado indica que voc?? est?? dispon??vel para julg??-lo - n??o h?? necessidade de verificar todos os estilos que voc?? est?? dispon??vel para julgar.";
$brewer_text_013 = "Clique ou toque no bot??o acima para expandir os estilos n??o preferidos para a lista de julgamentos.";
$brewer_text_014 = "N??o h?? necessidade de marcar os estilos para os quais voc?? tem amostras; o sistema n??o permitir?? que voc?? seja atribu??do a nenhuma tabela onde voc?? tenha amostras.";
$brewer_text_015 = "Voc?? est?? disposto a servir como mordomo nesta competi????o?";
$brewer_text_016 = "Minha participa????o neste julgamento ?? totalmente volunt??ria. Eu sei que a participa????o neste julgamento envolve o consumo de bebidas alco??licas e que este consumo pode afetar minhas percep????es e rea????es.";
$brewer_text_017 = "Clique ou toque no bot??o acima para expandir os estilos preferidos para a lista de jurados.";
$brewer_text_018 = "Ao marcar esta caixa, eu estou efetivamente assinando um documento legal no qual eu aceito a responsabilidade por minha conduta, comportamento e a????es e absolvo completamente a competi????o e seus organizadores, individual ou coletivamente, da responsabilidade por minha conduta, comportamento e a????es. ";
$brewer_text_019 = "Se voc?? planeja servir como juiz em qualquer competi????o, clique ou toque no bot??o acima para inserir suas informa????es relacionadas ao juiz.";
$brewer_text_020 = "Voc?? est?? disposto a servir como membro da equipe nesta competi????o?";
$brewer_text_021 = "Equipe da competi????o s??o pessoas que atuam em v??rias fun????es para ajudar na organiza????o e execu????o da competi????o antes, durante e ap??s o julgamento. Ju??zes e mordomos tamb??m podem servir como membros da equipe. Os membros da equipe podem ganhar pontos BJCP se a competi????o ?? sancionado. ";

$contact_text_000 = "Use os links abaixo para contatar as pessoas envolvidas na coordena????o desta competi????o:";
$contact_text_001 = "Use o formul??rio abaixo para entrar em contato com um oficial da competi????o. Todos os campos com uma estrela s??o obrigat??rios.";
$contact_text_002 = "Al??m disso, uma c??pia foi enviada para o endere??o de e-mail que voc?? forneceu.";
$contact_text_003 = "Deseja enviar outra mensagem?";

$default_page_text_000 = "Nenhum local de entrega foi especificado.";
$default_page_text_001 = "Adicionar um local de entrega?";
$default_page_text_002 = "Nenhuma data / local de julgamento foi especificado.";
$default_page_text_003 = "Adicionar um local de julgamento?";
$default_page_text_004 = "Amostras vencedoras";
$default_page_text_005 = "Os vencedores ser??o publicados em ou depois de";
$default_page_text_006 = "Bem-vindo";
$default_page_text_007 = "Veja os detalhes da sua conta e lista de amostras.";
$default_page_text_008 = "Veja os detalhes da sua conta aqui.";
$default_page_text_009 = "Melhor dos Vencedores do Show";
$default_page_text_010 = "Amostras vencedoras";
$default_page_text_011 = "Voc?? s?? precisa registrar suas informa????es uma vez e pode retornar a este site para inserir mais cervejas ou editar as cervejas que voc?? inseriu.";
$default_page_text_012 = "Voc?? pode at?? pagar suas taxas de inscri????o online, se desejar.";
$default_page_text_013 = "Oficial da Competi????o";
$default_page_text_014 = "Funcion??rios da competi????o";
$default_page_text_015 = "Voc?? pode enviar um email para qualquer um dos seguintes indiv??duos via";
$default_page_text_016 = "tem orgulho de ter o seguinte";
$default_page_text_017 = "para o";
$default_page_text_018 = "Fa??a o download dos vencedores do Best of Show no formato PDF.";
$default_page_text_019 = "Fa??a o download dos vencedores do Best of Show no formato HTML.";
$default_page_text_020 = "Fa??a o download das amostras vencedoras no formato PDF.";
$default_page_text_021 = "Fa??a o download das amostras vencedoras no formato HTML.";
$default_page_text_022 = "Obrigado pelo seu interesse no";
$default_page_text_023 = "organizado por";

$reg_open_text_000 = "O registro de juiz e assistente est??";
$reg_open_text_001 = "Aberto";
$reg_open_text_002 = "Se voc?? <em>n??o tiver</em> registrado e estiver disposto a ser um volunt??rio,";
$reg_open_text_003 = "registre-se por favor";
$reg_open_text_004 = "Se voc?? <em>tiver</em> registrado, fa??a o login e escolha <em>Editar conta</??????em> no menu Minha conta indicado pelo";
$reg_open_text_005 = "??cone no menu superior.";
$reg_open_text_006 = "J?? que voc?? j?? se registrou, voc?? pode";
$reg_open_text_007 = "verificar as informa????es da sua conta";
$reg_open_text_008 = "para ver se voc?? indicou que voc?? est?? disposto a julgar e/ou administrar.";
$reg_open_text_009 = "Se voc?? est?? disposto a julgar ou administrar, por favor retorne para registrar em ou depois de";
$reg_open_text_010 = "As inscri????es de amostras est??o";
$reg_open_text_011 = "Para adicionar suas amostras no sistema";
$reg_open_text_012 = "prossiga pelo processo de registro";
$reg_open_text_013 = "se voc?? j?? possui uma conta.";
$reg_open_text_014 = "use o formul??rio de adicionar uma amostra";

$reg_open_text_015 = "O registro do juiz est??";
$reg_open_text_016 = "O registro de assistente est??";
$reg_closed_text_000 = "Obrigado e boa sorte a todos que entraram no";
$reg_closed_text_001 = "Existem";
$reg_closed_text_002 = "participantes registrados, ju??zes e administradores.";
$reg_closed_text_003 = "amostras registradas e";
$reg_closed_text_004 = "participantes registrados, ju??zes e administradores.";
$reg_closed_text_005 = "A partir de";
$reg_closed_text_006 = "amostras recebidas e processadas (esse n??mero ser?? atualizado conforme as amostras forem retiradas dos locais de entrega e organizadas para julgamento).";
$reg_closed_text_007 = "As datas de julgamento da competi????o ainda ser??o determinadas. Por favor, volte mais tarde.";
$reg_closed_text_008 = "Mapear para";
$judge_closed_000 = "Obrigado a todos que participaram do";
$judge_closed_001 = "Houve";
$judge_closed_002 = "amostras julgadas e";
$judge_closed_003 = "participantes registrados, ju??zes e administradores.";

$entry_info_text_000 = "Voc?? poder?? criar sua conta come??ando";
$entry_info_text_001 = "at??";
$entry_info_text_002 = "Ju??zes e assistentes podem se registrar no come??o";
$entry_info_text_003 = "por amostra";
$entry_info_text_004 = "Voc?? pode criar sua conta de usu??rio at??";
$entry_info_text_005 = "Ju??zes e administradores podem se inscrever at??";
$entry_info_text_006 = "Inscri????es para";
$entry_info_text_007 = "ju??zes e administradores apenas";
$entry_info_text_008 = "aceite atrav??s de";
$entry_info_text_009 = "O registro ?? <strong class=\"text-danger\">fechado</strong>.";
$entry_info_text_010 = "Bem-vindo";
$entry_info_text_011 = "Veja os detalhes da sua conta e lista de amostras.";
$entry_info_text_012 = "Veja as informa????es da sua conta aqui.";
$entry_info_text_013 = "por amostra ap??s o";
$entry_info_text_014 = "Voc?? poder?? adicionar suas amostras ao sistema come??ando";
$entry_info_text_015 = "Voc?? pode adicionar suas amostras ao sistema hoje por meio de";
$entry_info_text_016 = "O registro de amostras est?? <strong class=\"text-danger\">fechado</ strong>.";
$entry_info_text_017 = "para amostras ilimitadas.";
$entry_info_text_018 = "para membros da AHA.";
$entry_info_text_019 = "Existe um limite de";
$entry_info_text_020 = "amostras para esta competi????o.";
$entry_info_text_021 = "Cada participante est?? limitado a";
$entry_info_text_022 = strtolower($label_entry);
$entry_info_text_023 = strtolower($label_entries);
$entry_info_text_024 = "amostra por subcategoria";
$entry_info_text_025 = "amostras por subcategoria";
$entry_info_text_026 = "exce????es s??o detalhadas abaixo";
$entry_info_text_027 = strtolower ($label_subcategory);
$entry_info_text_028 = "subcategorias";
$entry_info_text_029 = "amostra para o seguinte";
$entry_info_text_030 = "amostras para o seguinte";
$entry_info_text_031 = "Depois de criar sua conta e adicionar suas amostras no sistema, voc?? deve pagar sua(s) taxa(s) de amostra. As formas de pagamento aceitas s??o:";
$entry_info_text_032 = $label_cash;
$entry_info_text_033 = $label_check.", feito para";
$entry_info_text_034 = "Cart??o de cr??dito / d??bito e cheque eletr??nico, via PayPal";
$entry_info_text_035 = "As datas de julgamento da competi????o ainda ser??o determinadas. Por favor, volte mais tarde.";
$entry_info_text_036 = "Amostras aceitas no nosso local de recebimento de";
$entry_info_text_037 = "Enviar amostras para:";
$entry_info_text_038 = "Embale cuidadosamente as suas amostras em uma caixa resistente. Forre o interior da sua caixa com um saco de lixo. Embale cada garrafa separadamente com material de embalagem adequado. Por favor, n??o amontoe!";
$entry_info_text_039 = "Escreva claramente: <em>Fr??gil. Este lado para cima.</em> na embalagem. Por favor, use apenas pl??stico-bolha como material de embalagem.";
$entry_info_text_040 = "Coloque <em>cada</em> dos r??tulos das garrafas em uma pequena sacola pl??stica antes de prend??-los ??s respectivas garrafas. Dessa forma, o organizador pode identificar especificamente qual amostra quebrou se houver danos durante o transporte. ";
$entry_info_text_041 = "Todo esfor??o razo??vel ser?? feito para contatar os participantes cujas garrafas quebraram para providenciar o envio de garrafas de reposi????o.";
$entry_info_text_042 = "Se voc?? mora nos Estados Unidos, por favor, note que ?? <strong>ilegal</strong> enviar suas inscri????es atrav??s do Servi??o Postal dos Estados Unidos (USPS). Empresas de transporte privadas t??m o direito de recusar sua remessa se eles s??o informados de que o pacote cont??m bebidas de vidro e/ou bebidas alco??licas. Esteja ciente de que as encomendas enviadas internacionalmente s??o frequentemente solicitadas pela alf??ndega para ter a devida documenta????o. Essas amostras podem ser abertas e/ou devolvidas ao remetente por funcion??rios alfandeg??rios a seu crit??rio. ?? de sua inteira responsabilidade seguir todas as leis e regulamentos aplic??veis.";
$entry_info_text_043 = "Amostras aceitas em nossos locais de entrega presencial de";
$entry_info_text_044 = "Abrir mapa";
$entry_info_text_045 = "Clique para saber informa????es obrigat??rias das amostras";
$entry_info_text_046 = "Se o nome de um estilo ?? um link, a amostra possui requisitos espec??ficos. Clique no nome para ver os requisitos da subcategoria.";

$brewer_entries_text_000 = "H?? um problema conhecido com a impress??o do navegador Firefox.";
$brewer_entries_text_001 = "Voc?? tem amostras n??o confirmadas.";
$brewer_entries_text_002 = "Para cada amostra abaixo com o ??cone <span class=\"fa-lg fa-exclamation-circle text-danger\"></span>, clique no ??cone <span class=\"fa fa-lg fa-pencil text-primary\"></span> para revisar e confirmar todos os dados das amostras. As amostras n??o confirmadas podem ser exclu??das do sistema sem aviso pr??vio.";
$brewer_entries_text_003 = "Voc?? N??O PODE pagar pelas suas inscri????es at?? que todas as inscri????es sejam confirmadas.";
$brewer_entries_text_004 = "Voc?? tem amostras que exigem que voc?? defina um tipo espec??fico, ingredientes especiais, estilo cl??ssico, for??a e/ou cor.";
$brewer_entries_text_005 = "Para cada amostra abaixo com um ??cone <span class =\"fa-lg fa-exclamation-circle text-danger\"></ span>, clique no ??cone <span class=\"fa fa-lg fa ??cone de texto-prim??rio com l??pis\"></span> para inserir as informa????es necess??rias. Amostras sem um tipo espec??fico, ingredientes especiais, estilo cl??ssico, for??a e/ou cor nas categorias que os exigem podem ser exclu??das pelo sistema sem aviso.";
$brewer_entries_text_006 = "Fa??a o download de planilhas de ju??zes&rsquo; para";
$brewer_entries_text_007 = "Estilo n??o inserido";
$brewer_entries_text_008 = "Formul??rio de Inscri????o e";
$brewer_entries_text_009 = "R??tulos de Garrafas";
$brewer_entries_text_010 = "Imprimir formul??rio de receita para";
$brewer_entries_text_011 = "Al??m disso, voc?? n??o poder?? adicionar outra amostra caso o limite de amostras para a competi????o tenha sido alcan??ado. Clique em Cancelar nesta caixa e depois edite a amostra se voc?? quiser mant??-la.";
$brewer_entries_text_012 = "Tem certeza que deseja apagar a amostra chamada";
$brewer_entries_text_013 = "Voc?? poder?? adicionar amostras a partir de";
$brewer_entries_text_014 = "Voc?? n??o adicionou nenhuma amostra ao sistema.";
$brewer_entries_text_015 = "Voc?? n??o pode deletar sua amostra neste momento.";

$past_winners_text_000 = "Ver vencedores anteriores:";

$pay_text_000 = "a janela de pagamento passou.";
$pay_text_001 = "Entre em contato com um oficial da competi????o se tiver alguma d??vida.";
$pay_text_002 = "as seguintes s??o as op????es para pagar as taxas de inscri????o.";
$pay_text_003 = "Taxas s??o";
$pay_text_004 = "por amostra";
$pay_text_005 = "por amostra ap??s o";
$pay_text_006 = "para amostras ilimitadas";
$pay_text_007 = "Suas taxas foram descontadas para";
$pay_text_008 = "Suas taxas totais de inscri????o s??o";
$pay_text_009 = "Voc?? precisa pagar";
$pay_text_010 = "Suas taxas foram marcadas como pagas. Obrigado!";
$pay_text_011 = "Voc?? ainda n??o pagou";
$pay_text_012 = "das sua(s)";
$pay_text_013 = "Anexe um cheque com o valor global em uma de suas garrafas. Os cheques dever??o estar cruzados e nominais para";
$pay_text_014 = "Guarde uma c??pia do cheque. N??o haver?? recibo.";
$pay_text_015 = "Anexar pagamento em dinheiro para o valor global das taxas em um <em>envelope lacrado</em> em uma de suas garrafas.";
$pay_text_016 = "As folhas de resultados retornados servir??o como recibo da amostra.";
$pay_text_017 = "O seu email de confirma????o de pagamento ?? o seu recibo da amostra. Inclua uma c??pia com as suas amostras como prova de pagamento.";
$pay_text_018 = "Clique no bot??o <em>Pagar com PayPal</em> abaixo para pagar on-line.";
$pay_text_019 = "Por favor, note que uma taxa de transa????o de";
$pay_text_020 = "ser?? adicionado ao seu total.";
$pay_text_021 = "Para garantir que seu pagamento pelo PayPal esteja marcado como <strong>pago</strong> no <strong>site</strong>, clique no link <em> Retornar para ... </em> Tela de confirma????o do PayPal <strong>ap??s</strong> voc?? enviou o seu pagamento. Al??m disso, certifique-se de imprimir o comprovante de pagamento e anex??-lo a uma de suas amostras. ";
$pay_text_022 = "Certifique-se de clicar em <em>Retornar para ...</em> depois de pagar suas taxas";
$pay_text_023 = "Digite o c??digo fornecido pelos organizadores da competi????o para uma taxa de amostra com desconto.";
$pay_text_024 = $pay_text_010;
$pay_text_025 = "Voc?? ainda n??o inscreveu nenhuma amostra.";
$pay_text_026 = "Voc?? n??o pode pagar por suas amostras porque uma ou mais de suas amostras n??o est??o confirmadas.";
$pay_text_027 = "Clique em <em>Minha conta</??????em> acima para revisar suas amostras n??o confirmadas.";
$pay_text_028 = "Voc?? tem amostras n??o confirmadas que <em>n??o</em> est??o refletidas em seus totais de taxas abaixo.";
$pay_text_029 = "Por favor, v?? para a sua lista de amostras para confirmar todos os dados da sua amostra. As amostras n??o confirmadas podem ser exclu??das do sistema sem aviso.";

if (strpos ($view, "^")!== FALSE) {
    $qr_text_019 =sprintf ("%06d", $checked_in_numbers [0]);
    if (is_numeric ($checked_in_numbers [1])) $qr_text_020 = sprintf ("%06d", $checked_in_numbers [1]);
    else $qr_text_020 = $checked_in_numbers [1];
}

$qr_text_000 = $alert_text_080;
$qr_text_001 = $alert_text_081;

// Comece tradu????es aqui
if (strpos($view, "^") !== FALSE) $qr_text_002 = sprintf("N??mero de amostra <span class=\"text-danger\">%s</span> ?? verificado com <span class=\"text-danger\">%s</ span> como seu n??mero de julgamento.",$qr_text_019,$qr_text_020); else $qr_text_002 = "";
$qr_text_003 = "Se este n??mero de avalia????o n??o for <em> </em> correto, <strong> verifique novamente o c??digo e digite novamente o n??mero de avalia????o correto.";
if (strpos ($view, "^")!== FALSE) $qr_text_004 = sprintf ("N??mero da amostra %s est?? marcado", $qr_text_019); else $qr_text_004 = "";
if (strpos ($view, "^")!== FALSE) $qr_text_005 = sprintf ("N??mero da amostra %s n??o foi encontrado no banco de dados. Deixe a(s) garrafa(s) de lado e alerte o organizador da competi????o.", $qr_text_019 ); else $qr_text_005 = "";
if (strpos ($view, "^")!== FALSE) $qr_text_006 = sprintf ("O n??mero do julgamento que voc?? digitou - %s - j?? est?? atribu??do ao n??mero de amostra %s.", $qr_text_020, $qr_text_019); else $qr_text_006 = "";
$qr_text_007 = "Check-in de amostra por c??digo QR";
$qr_text_008 = "Para fazer o check-in das amostras por meio do c??digo QR, forne??a a senha correta. Voc?? s?? precisar?? fornecer a senha uma vez por sess??o - certifique-se de manter o aplicativo de verifica????o de c??digo QR aberto.";
$qr_text_009 = "Atribuir um n??mero de julgamento e/ou n??mero de caixa ?? amostra";
$qr_text_010 = "SOMENTE insira um n??mero de julgamento se o seu concorrente estiver usando o n??mero de marcadores na ordena????o.";
$qr_text_011 = "Seis n??meros com zeros ?? esquerda - por exemplo, 000021.";
$qr_text_012 = "Certifique-se de verificar novamente sua amostra e afixar os r??tulos dos n??meros de julgamento apropriados em cada r??tulo de garrafa e frasco (se aplic??vel).";
$qr_text_013 = "Os n??meros de julgamento devem ter seis caracteres e n??o podem incluir o caractere ^.";
$qr_text_014 = "Esperando pela entrada do c??digo QR digitalizado.";
$qr_text_015 = "Inicie ou volte ao aplicativo de escaneamento do seu dispositivo m??vel para escanear um c??digo QR.";
$qr_text_016 = "Precisa de um aplicativo de verifica????o de c??digo QR? <a href=\"https://play.google.com/store/search?q=qr%20code%20scanner&c=apps&hl=en\" target=\"_blank\">Google Play</a> (Android) ou <a href=\"https://itunes.apple.com/store/\" target=\"_blank\">iTunes</a> (iOS).";
$qr_text_017 = "?? necess??rio um aplicativo de escaneamento de QR Code para utilizar este recurso.";
$qr_text_018 = "Inicie o aplicativo em seu dispositivo m??vel, digitalize um C??digo QR localizado em um r??tulo de garrafa, insira a senha solicitada e fa??a o check-in da amostra.";

$register_text_000 = "?? o volunt??rio";
$register_text_001 = "Voc?? est??";
$register_text_002 = "O registro foi encerrado.";
$register_text_003 = "Obrigado pelo seu interesse.";
$register_text_004 = "As informa????es que voc?? fornecer al??m do seu primeiro nome, sobrenome e clube s??o estritamente para fins de registro e manuten????o.";
$register_text_005 = "Uma condi????o para entrar na competi????o ?? fornecer esta informa????o. Seu nome e clube podem ser exibidos no caso de uma das suas inscri????es, mas nenhuma outra informa????o ser?? tornada p??blica.";
$register_text_006 = "Lembrete: Voc?? s?? tem permiss??o para entrar em uma regi??o e depois de se registrar em um local, voc?? N??O poder?? alter??-la.";
$register_text_007 = "R??pido";
$register_text_008 = "Registrar";
$register_text_009 = "um juiz/administrador";
$register_text_010 = "um participante";
$register_text_011 = "Para se registrar, crie sua conta online preenchendo os campos abaixo.";
$register_text_012 = "Adicione rapidamente um participante juiz ou assistente. Um endere??o fict??cio e n??mero de telefone ser??o usados ??????e uma senha padr??o de <em>bcoem</em> ser?? dado a cada participante adicionado atrav??s desta tela.";
$register_text_013 = "A inscri????o nesta competi????o ?? realizada completamente online.";
$register_text_014 = "Para adicionar suas amostras e/ou indicar que voc?? est?? disposto a julgar ou administrar (ju??zes e assitentes tamb??m podem adicionar amostras), voc?? precisar?? criar uma conta em nosso sistema.";
$register_text_015 = "Seu endere??o de e-mail ser?? seu nome de usu??rio e ser?? usado como meio de divulga????o de informa????es pela equipe da competi????o. Verifique se est?? correto.";
$register_text_016 = "Depois de se registrar, voc?? pode continuar o processo de inscri????o.";
$register_text_017 = "Cada amostra que voc?? adicionar ser?? automaticamente atribu??da a um n??mero pelo sistema.";
$register_text_018 = "Escolha uma. Esta quest??o ser?? usada para verificar sua identidade caso voc?? esque??a sua senha.";
$register_text_019 = "Por favor, forne??a um endere??o de e-mail.";
$register_text_020 = "Os endere??os de e-mail que voc?? digitou n??o s??o iguais.";
$register_text_021 = "Endere??os de e-mail servem como nomes de usu??rios.";
$register_text_022 = "Por favor, forne??a uma senha.";
$register_text_023 = "Por favor, forne??a uma resposta ?? sua pergunta de seguran??a.";
$register_text_024 = "Fa??a a sua seguran??a responder a algo que s?? voc?? se lembrar?? facilmente!";
$register_text_025 = "Por favor, forne??a um primeiro nome.";
$register_text_026 = "Por favor, forne??a um sobrenome.";
$register_text_027 = "";
$register_text_028 = "Por favor, forne??a um endere??o.";
$register_text_029 = "Por favor, forne??a uma cidade.";
$register_text_030 = "Por favor, forne??a um estado.";
$register_text_031 = "Por favor, forne??a um CEP ou c??digo postal.";
$register_text_032 = "Por favor, forne??a um n??mero de telefone principal.";
$register_text_033 = "Somente os membros da American Homebrewers Association s??o eleg??veis para uma oportunidade do Great American Beer Festival Pro-Am.";
$register_text_034 = "Para se registrar, voc?? deve marcar a caixa, indicando que concorda com a declara????o de ren??ncia.";
$register_text_035 = "Favor preencher um CPF v??lido.";

$sidebar_text_000 = "Inscri????es para ju??zes ou assitentes";
$sidebar_text_001 = "Inscri????es para assitentes";
$sidebar_text_002 = "Inscri????es para ju??zes";
$sidebar_text_003 = "Inscri????es encerradas. O limite de ju??zes e assistentes foi atingido.";
$sidebar_text_004 = "at??";
$sidebar_text_005 = "O registro de usu??rios estar?? aberto de";
$sidebar_text_006 = "est?? aberto apenas para ju??zes ou assistentes";
$sidebar_text_007 = "est?? aberto apenas para assistentes";
$sidebar_text_008 = "est?? aberto apenas para ju??zes";
$sidebar_text_009 = "A inscri????o de amostras estar?? aberta de ";
$sidebar_text_010 = "O limite de amostras pagas da competi????o foi atingido.";
$sidebar_text_011 = "O limite de amostras da competi????o foi atingido.";
$sidebar_text_012 = "Veja sua lista de amostras.";
$sidebar_text_013 = "Clique aqui para pagar suas taxas das amostras.";
$sidebar_text_014 = "As taxas de inscri????o n??o incluem amostras n??o confirmadas.";
$sidebar_text_015 = "Voc?? tem amostras n??o confirmadas - a a????o ?? necess??ria para confirmar.";
$sidebar_text_016 = "Veja sua lista de amostras.";
$sidebar_text_017 = "Voc?? tem";
$sidebar_text_018 = "restantes antes de atingir o limite de";
$sidebar_text_019 = "por participante";
$sidebar_text_020 = "Voc?? atingiu o limite de";
$sidebar_text_021 = "nesta competi????o";
$sidebar_text_022 = "Os amostras poder??o ser entregues no";
$sidebar_text_023 = "endere??o para recebimento por correios de";
$sidebar_text_024 = "As datas de julgamento da competi????o ainda ser??o determinadas. Por favor, volte mais tarde.";
$sidebar_text_025 = "foram adicionadas ao sistema a partir de";

$styles_entry_text_07C = "O participante deve especificar se a amostra ?? um Munich Kellerbier (p??lido, baseado em Helles) ou um Franconian Kellerbier (??mbar, baseado em Marzen). O participante pode especificar outro tipo de Kellerbier baseado em outros estilos base, como Pils. , Bock, Schwarzbier, mas deve fornecer uma descri????o de estilo para os ju??zes. ";
$styles_entry_text_09A = "O participante deve especificar se a amostra ?? uma variante p??lida ou escura.";
$styles_entry_text_10C = "O participante deve especificar se a amostra ?? uma variante p??lida ou escura.";
$styles_entry_text_21B = "O participante deve especificar uma for??a (sess??o: 3.0-5.0%, padr??o: 5.0-7.5%, duplo: 7.5-9.5%); se nenhuma for??a for especificada, o padr??o ser?? assumido. O participante deve especificar um tipo espec??fico de especialidade IPA da biblioteca de tipos conhecidos listados nas Diretrizes de Estilo, ou emendadas pelo site do BJCP, ou o participante deve descrever o tipo de Especialidade IPA e suas principais caracter??sticas no formul??rio de coment??rio para que os jurados saibam o que esperar. Variedades de l??pulo espec??ficas usadas, se os participantes sentirem que os ju??zes podem n??o reconhecer as caracter??sticas varietais do l??pulo mais novo Os participantes podem especificar uma combina????o de tipos definidos de IPA (por exemplo, Black Rye IPA) sem fornecer descri????es adicionais. vers??o de um IPA definido por sua pr??pria subcategoria BJCP (por exemplo, IPA americano ou ingl??s de for??a de sess??o) - exceto onde j?? existe uma subcategoria BJCP para esse estilo (por exemplo, duplo IPA [americano]). Tipos: IPA preto, IPA castanho, IPA branco, IPA de centeio, IPA belga, IPA vermelho. ";
$styles_entry_text_23F = "O tipo de fruta usado deve ser especificado. O cervejeiro deve declarar um n??vel de carbonata????o (baixo, m??dio, alto) e um n??vel de do??ura (baixo / nenhum, m??dio, alto).";
$styles_entry_text_24C = "O participante deve especificar bi??re de louro, ??mbar ou marrom. Se nenhuma cor for especificada, o juiz deve tentar julgar com base na observa????o inicial, esperando um sabor e um equil??brio de malte que correspondam ?? cor.";
$styles_entry_text_25B = "O participante deve especificar a for??a (tabela, padr??o, super) e a cor (claro, escuro).";
$styles_entry_text_27A = "O participante deve especificar um estilo com uma descri????o fornecida pelo BJCP, ou fornecer uma descri????o semelhante para os ju??zes de um estilo diferente. Se uma cerveja ?? inserida apenas com um nome de estilo e sem descri????o, ?? muito improv??vel que os ju??zes entender??o como julg??-lo: Exemplos atualmente definidos: Gose, Piwo Grodziskie, Lichtenhainer, Roggenbier, Sahti, Kentucky Common, Pre-Prohibition Lager, Pre-Prohibition Porter, London Brown Ale. ";
$styles_entry_text_28A = "O participante deve especificar um estilo de cerveja base (estilo BJCP cl??ssico ou uma fam??lia de estilo gen??rico) ou fornecer uma descri????o dos ingredientes / especifica????es / caractere desejado. O participante deve especificar se uma fermenta????o de Brett 100% foi conduzida. O participante pode especificar a (s) estirpe (s) de Brettanomyces utilizadas, juntamente com uma breve descri????o do seu car??ter. ";
$styles_entry_text_28B = "O participante deve especificar uma descri????o da cerveja, identificando as leveduras / bact??rias usadas e um estilo base ou os ingredientes / especifica????es / car??ter alvo da cerveja.";
$styles_entry_text_28C = "O participante deve especificar o tipo de fruta, especiaria, erva ou madeira usada. O participante deve especificar uma descri????o da cerveja, identificando as leveduras / bact??rias usadas e um estilo de base ou os ingredientes / especifica????es / car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode abranger todos os itens necess??rios. ";
$styles_entry_text_29A = "O participante deve especificar um estilo base; o estilo declarado n??o precisa ser um estilo Cl??ssico. O participante deve especificar o tipo de fruta usada. Cervejas de frutas com sabor que n??o s??o lambics devem ser inseridas no American Wild Ale categoria.";
$styles_entry_text_29B = "O participante deve especificar um estilo base; o estilo declarado n??o precisa ser um Estilo Cl??ssico. O participante deve especificar o tipo de fruta e especiarias, ervas ou vegetais (SHV) utilizados; os ingredientes SHV individuais n??o precisam a especificar se for usada uma mistura bem conhecida de especiarias (por exemplo, torta de ma????). ";
$styles_entry_text_29C = "O participante deve especificar um estilo de base; o estilo declarado n??o precisa ser um Estilo Cl??ssico. O participante deve especificar o tipo de fruto usado. O participante deve especificar o tipo de a????car ferment??vel adicional ou processo especial empregado." ;
$styles_entry_text_30A = "O participante deve especificar um estilo base; o estilo declarado n??o precisa ser um estilo Cl??ssico. O participante deve especificar o tipo de especiarias, ervas ou vegetais utilizados; ingredientes individuais n??o precisam ser especificados se um po??o conhecida mistura de especiarias ?? usada (por exemplo, torta de ma????). ";
$styles_entry_text_30B = "O participante deve especificar um estilo base; o estilo declarado n??o precisa ser um estilo Cl??ssico. O participante deve especificar o tipo de especiarias, ervas ou vegetais utilizados; ingredientes individuais n??o precisam ser especificados se um po??o conhecida mistura de especiarias (por exemplo, torta de ab??bora). A cerveja deve conter especiarias e pode conter vegetais e / ou a????cares. ";
$styles_entry_text_30C = "O participante deve especificar um estilo base; o estilo declarado n??o precisa ser um Estilo Cl??ssico. O participante deve especificar o tipo de especiarias, a????cares, frutas ou fermentescos adicionais usados; ingredientes individuais n??o precisam ser especificados se for usada uma mistura bem conhecida de especiarias (por exemplo, tempero quente). ";
$styles_entry_text_31A = "O participante deve especificar um estilo base; o estilo declarado n??o precisa ser um estilo Cl??ssico. O participante deve especificar o tipo de gr??o alternativo usado.";
$styles_entry_text_31B = "O participante deve especificar um estilo base; o estilo declarado n??o precisa ser um estilo Cl??ssico. O participante deve especificar o tipo de a????car usado.";
$styles_entry_text_32A = "O participante deve especificar uma cerveja base de Estilo Cl??ssico. O participante deve especificar o tipo de madeira ou fuma??a se um car??ter de fuma??a varietal for percept??vel.";
$styles_entry_text_32B = "O participante deve especificar um estilo de cerveja base; a cerveja base n??o precisa ser um Estilo Cl??ssico. O participante deve especificar o tipo de madeira ou fuma??a se um car??ter de fuma??a varietal for percept??vel. O participante deve especificar os ingredientes adicionais ou processos que fazem desta uma cerveja fumada especializada. ";
$styles_entry_text_33A = "O participante deve especificar o tipo de madeira usado e o n??vel do char (se carbonizado). O participante deve especificar o estilo base; o estilo base pode ser um estilo BJCP cl??ssico (ou seja, uma subcategoria nomeada) ou pode ser um tipo gen??rico de cerveja (por exemplo, porter, brown ale). Se uma madeira incomum tiver sido usada, o participante deve fornecer uma breve descri????o dos aspectos sensoriais que a madeira adiciona ?? cerveja. ";
$styles_entry_text_33B = "O participante deve especificar o caractere adicional de ??lcool, com informa????es sobre o barril se relevante para o perfil final. O participante deve especificar o estilo base; o estilo base pode ser um estilo cl??ssico do BJCP (ou seja, uma subcategoria denominada ) ou pode ser um tipo gen??rico de cerveja (por exemplo, porter, brown ale). Se uma madeira ou ingrediente incomum tiver sido usado, o participante deve fornecer uma breve descri????o dos aspectos sensoriais que os ingredientes acrescentam ?? cerveja. ";
$styles_entry_text_34A = "O participante deve especificar o nome da cerveja comercial que est?? sendo clonada, as especifica????es (estat??sticas vitais) da cerveja e uma breve descri????o sensorial ou uma lista de ingredientes usados ??????na fabrica????o da cerveja. Sem essa informa????o, os ju??zes n??o familiarizado com a cerveja n??o ter?? base para compara????o. ";
$styles_entry_text_34B = "O participante deve especificar os estilos sendo misturados. O participante pode fornecer uma descri????o adicional do perfil sensorial da cerveja ou as estat??sticas vitais da cerveja resultante.";
$styles_entry_text_34C = "O participante deve especificar a natureza especial da cerveja experimental, incluindo os ingredientes ou processos especiais que a tornam inadequada em outras partes das diretrizes. O participante deve fornecer estat??sticas vitais para a cerveja e uma breve descri????o sensorial ou uma lista de ingredientes usados ??????na fabrica????o da cerveja Sem essa informa????o, os ju??zes n??o ter??o base para compara????o. ";
$styles_entry_text_M1A = "Instru????es da amostra: Os participantes devem especificar o n??vel de carbonata????o e for??a. A do??ura ?? considerada como SECA nesta categoria. Os participantes podem especificar variedades de mel.";
$styles_entry_text_M1B = "Os participantes devem especificar o n??vel de carbonata????o e for??a. A do??ura ?? considerada SEMI-DOCE nesta categoria. Os participantes podem especificar variedades de mel.";
$styles_entry_text_M1C = "Os participantes DEVEM especificar o n??vel e a for??a de carbonata????o. A do??ura ?? considerada DOCE nesta categoria. Os participantes PODEM especificar variedades de mel.";
$styles_entry_text_M2A = "Os participantes devem especificar o n??vel de carbonata????o, for??a e do??ura. Os participantes podem especificar variedades de mel. Os participantes podem especificar as variedades de ma???? usadas; se especificado, um car??ter varietal ser?? esperado. Produtos com uma propor????o relativamente baixa de mel s??o melhores introduzido como uma sidra especializada. Um ciser temperado deve ser introduzido como um Fruit Mice e Spice Mead. Um cyser com outras frutas deve ser inserido como um Melomel. Um cyser com ingredientes adicionais deve ser inserido como um hidromel Experimental. ";
$styles_entry_text_M2B = "Os participantes devem especificar o n??vel de carbonata????o, for??a e do??ura. Os participantes podem especificar variedades de mel. Os participantes podem especificar as variedades de uva usadas; se especificado, um car??ter varietal ser?? esperado. Um pyeap temperado (hippocras) deve ser inserido como Um Moinho de Frutas e Especiarias. Um picmento feito com outras frutas deve ser inserido como Melomel. Um picmento com outros ingredientes deve ser inserido como um Mead Experimental. ";
$styles_entry_text_M2C = "Os participantes devem especificar o n??vel de carbonata????o, for??a e do??ura. Os participantes podem especificar variedades de mel. Os participantes devem especificar as variedades de frutas usadas. Um hidromel feito com frutas silvestres e n??o silvestres (incluindo ma????s e uvas) deve ser digitado. Um melomel. Um hidromel que seja condimentado deve ser introduzido como um Fruit Mice and Spice Mead. Um hidromel que contenha outros ingredientes deve ser inserido como um Mead Experimental. ";
$styles_entry_text_M2D = "Os participantes devem especificar o n??vel de carbonata????o, for??a e do??ura. Os participantes podem especificar variedades de mel. Os participantes devem especificar as variedades de frutas usadas. Um hidromel com especiarias deve ser inserido como um Fruit and Spice Mead. O hidromel que contiver frutos n??o maduros deve ser introduzido como Melomel. Um hidromel com frutos de casca rija que contenha outros ingredientes deve ser introduzido como um hidromel experimental. ";
$styles_entry_text_M2E = "Os participantes devem especificar o n??vel de carbonata????o, for??a e do??ura. Os participantes podem especificar variedades de mel. Os participantes devem especificar as variedades de frutas usadas. Um melomel que ?? temperado deve ser inserido como um Fruit Mice. deve ser inserido como um Mead Experimental Melomels feitos com ma????s ou uvas como a ??nica fonte de frutas devem ser inseridos como Cysers e Pyments, respectivamente. Melomels com ma????s ou uvas, al??m de outras frutas devem ser inseridos nesta categoria, n??o Experimental.";
$styles_entry_text_M3A = "Os participantes devem especificar o n??vel de carbonata????o, for??a e do??ura. Os participantes podem especificar variedades de mel. Os participantes devem especificar os tipos de especiarias usadas (embora misturas de especiarias conhecidas possam ser referidas pelo nome comum, Os participantes devem especificar os tipos de frutos utilizados: Se forem utilizadas apenas combina????es de especiarias, introduza como Condimento, Erva ou Molho de Legumes. Se forem utilizadas apenas combina????es de frutos, entre como Melomel, se forem utilizados outros tipos de ingredientes. , insira como um Mead Experimental. ";
$styles_entry_text_M3B = "Os participantes DEVEM especificar o n??vel de carbonata????o, for??a e do??ura. Os participantes DEVEM especificar variedades de mel. Os participantes DEVEM especificar os tipos de especiarias usados ??????(embora misturas de especiarias conhecidas possam ser referidas pelo nome comum, como especiarias de torta de ma????) . ";
$styles_entry_text_M4A = "Os participantes DEVEM especificar o n??vel de carbonata????o, for??a e do??ura. Os participantes PODEM especificar variedades de mel. Os participantes podem especificar o estilo b??sico ou cerveja ou tipos de malte usados. Produtos com uma propor????o relativamente baixa de mel devem ser inseridos na Cerveja Condicionada. categoria como uma cerveja de mel. ";
$styles_entry_text_M4B = "Os participantes DEVEM especificar o n??vel de carbonata????o, for??a e do??ura. Os participantes PODEM especificar variedades de mel. Os participantes DEVEM especificar a natureza especial do hidromel, fornecendo uma descri????o do hidromel para ju??zes se tal descri????o n??o estiver dispon??vel no BJCP." ;
$styles_entry_text_M4C = "Os participantes DEVEM especificar o n??vel de carbonata????o, for??a e do??ura. Os participantes DEVEM especificar variedades de mel. Os participantes DEVEM especificar a natureza especial do hidromel, seja uma combina????o de estilos existentes, um hidromel experimental ou alguma outra cria????o. ingredientes especiais que d??o um car??ter identific??vel PODEM ser declarados. ";
$styles_entry_text_C1E = "Os participantes DEVEM especificar o n??vel de carbonata????o (3 n??veis). Os participantes DEVEM especificar a do??ura (5 categorias). Os participantes DEVEM indicar a variedade de p??ra usada (s).";
$styles_entry_text_C2A = "Os participantes DEVEM especificar se a sidra foi fermentada com barril ou envelhecida. Os participantes DEVEM especificar o n??vel de carbonata????o (3 n??veis). Os participantes DEVEM especificar a do??ura (5 n??veis).";
$styles_entry_text_C2B = "Os participantes DEVEM especificar o n??vel de carbonata????o (3 n??veis). Os participantes DEVEM especificar a do??ura (5 categorias). Os participantes DEVEM especificar todos os frutos e / ou suco (s) de frutas adicionados.";
$styles_entry_text_C2C = "Os participantes devem especificar o n??vel de carbonata????o (3 n??veis). Os participantes devem especificar do??ura (5 n??veis).";
$styles_entry_text_C2D = "Os participantes DEVEM especificar a gravidade inicial, a gravidade final ou o a????car residual e o n??vel de ??lcool. Os participantes DEVEM especificar o n??vel de carbonata????o (3 n??veis).";
$styles_entry_text_C2E = "Os participantes DEVEM especificar o n??vel de carbonata????o (3 n??veis). Os participantes DEVEM especificar do??ura (5 categorias). Os participantes DEVEM especificar todos os ingredientes adicionados. Se o l??pulo for usado, o participante deve especificar a variedade / variedades usadas.";
$styles_entry_text_C2F = "Os participantes DEVEM especificar todos os ingredientes. Os participantes DEVEM especificar o n??vel de carbonata????o (3 n??veis). Os participantes DEVEM especificar a do??ura (5 categorias).";

$user_text_000 = "Um novo endere??o de e-mail ?? obrigat??rio e deve estar em um formul??rio v??lido.";
$user_text_001 = "Digite a senha antiga.";
$user_text_002 = "Digite a nova senha.";
$user_text_003 = "Por favor, marque esta caixa se voc?? deseja mudar o seu endere??o de e-mail.";

$volunteers_text_000 = "Se voc?? se registrou,";
$volunteers_text_001 = "e depois escolha <em> Editar conta </ ??????em> no menu Minha conta indicado pelo";
$volunteers_text_002 = "??cone no menu superior";
$volunteers_text_003 = "e";
$volunteers_text_004 = "Se voc?? tiver <em> n??o </em> registrado e estiver disposto a ser um juiz ou mordomo, registre-se";
$volunteers_text_005 = "Desde que voc?? j?? se registrou,";
$volunteers_text_006 = "acessar sua conta";
$volunteers_text_007 = "para ver se voc?? se ofereceu para ser um juiz ou mordomo";
$volunteers_text_008 = "Se voc?? estiver disposto a julgar ou administrar, por favor, retorne ao cadastro em ou ap??s";

$volunteers_text_009 = "Se voc?? gostaria de se voluntariar para ser um membro da equipe de competi????o, registre ou atualize sua conta para indicar que voc?? deseja fazer parte da equipe da competi????o.";
$volunteers_text_010 = "";

$login_text_000 = "Voc?? j?? est?? logado.";
$login_text_001 = "N??o h?? endere??o de e-mail no sistema que corresponda ao que voc?? digitou.";
$login_text_002 = "Tente de novo?";
$login_text_003 = "Voc?? j?? registrou sua conta?";
$login_text_004 = "Esqueceu sua senha?";
$login_text_005 = "Redefini-lo";
$login_text_006 = "Para redefinir sua senha, digite o endere??o de e-mail que voc?? usou quando se registrou.";
$login_text_007 = "Verificar";
$login_text_008 = "Gerado aleatoriamente.";
$login_text_009 = "<strong> Indispon??vel. </ strong> Sua conta foi criada por um administrador e sua &quot; resposta secreta&quot; foi gerada aleatoriamente. Entre em contato com o administrador de um site para recuperar ou alterar sua senha.";
$login_text_010 = "Ou use a op????o de e-mail abaixo.";
$login_text_011 = "Sua pergunta de seguran??a ?? ...";
$login_text_012 = "Se voc?? n??o recebeu o email,";
$login_text_013 = "Um e-mail ser?? enviado para voc?? com sua pergunta e resposta de verifica????o. Certifique-se de verificar sua pasta de SPAM.";
$login_text_014 = "clique aqui para reenvi??-lo para";
$login_text_015 = "Se voc?? n??o consegue lembrar a resposta ?? sua pergunta de seguran??a, entre em contato com um oficial de competi????o ou administrador do site.";
$login_text_016 = "Envie-o por e-mail para";

$winners_text_000 = "Nenhum ganhador foi inserido para esta tabela. Por favor, volte mais tarde.";
$winners_text_001 = "Amostras vencedoras ainda n??o foram postadas. Por favor, volte mais tarde.";
$winners_text_002 = "Sua estrutura de premia????o escolhida ?? premiar lugares por tabela. Selecione os lugares de premia????o para a tabela como um todo abaixo.";
$winners_text_003 = "Sua estrutura de premia????o escolhida ?? premiar lugares por categoria. Selecione os locais de premia????o para cada categoria geral abaixo (pode haver mais de um nesta tabela).";
$winners_text_004 = "Sua estrutura de premia????o escolhida ?? premiar lugares por subcategoria. Selecione os locais de premia????o para cada subcategoria abaixo (pode haver mais de um nesta tabela).";

$output_text_000 = "Obrigado por participar da nossa competi????o";
$output_text_001 = "Um resumo de suas amostras, pontua????es e lugares est?? abaixo.";
$output_text_002 = "Resumo para";
$output_text_003 = "amostras foram julgadas";
$output_text_004 = "Suas planilhas n??o podem ser geradas adequadamente. Entre em contato com os organizadores da competi????o.";
$output_text_005 = "Nenhuma atribui????o de juiz / mordomo foi definida";
$output_text_006 = "para esta localiza????o";
$output_text_007 = "Se voc?? quiser imprimir cart??es de mesa em branco, feche esta janela e escolha <em> Imprimir Cart??es de Mesa: Todas as Tabelas </em> no menu <em> Relat??rio </em>.";
$output_text_008 = "Por favor, certifique-se de verificar se o seu Juiz BJCP ID est?? correto. Se n??o for, ou se voc?? tiver um e n??o estiver listado, por favor insira-o no formul??rio.";
$output_text_009 = "Se o seu nome n??o estiver na lista abaixo, entre na (s) folha (s) anexada (s).";
$output_text_010 = "Para receber o cr??dito de julgamento, por favor, certifique-se de digitar seu ID de Juiz BJCP de forma correta e leg??vel.";
$output_text_011 = "Nenhuma tarefa foi feita.";
$output_text_012 = "Total de amostras neste local";
$output_text_013 = "Nenhum participante forneceu anota????es aos organizadores.";
$output_text_014 = "A seguir est??o as notas para os organizadores inseridos pelos ju??zes.";
$output_text_015 = "Nenhum participante forneceu anota????es aos organizadores.";
$output_text_016 = "Invent??rio de amostras p??s-julgamento";
$output_text_017 = "Se n??o houver amostras abaixo, os voos desta tabela n??o foram atribu??dos a rodadas.";
$output_text_018 = "Se houver amostras faltando, todas as amostras n??o foram atribu??das a um v??o ou rodada OU foram designadas para uma rodada diferente.";
$output_text_019 = "Se n??o houver amostras abaixo, esta tabela n??o foi atribu??da a uma rodada.";
$output_text_020 = "Nenhuma amostra ?? eleg??vel.";
$output_text_021 = "Folha de refer??ncia do n??mero de amostra/n??mero de julgamento";
$output_text_022 = "Os pontos neste relat??rio s??o derivados dos requisitos oficiais da Competi????o sancionada pelo BJCP, dispon??veis em";
$output_text_023 = "inclui Melhor do Show";
$output_text_024 = "Relat??rio de Pontos BJCP";
$output_text_025 = "Total de Pontos de Pessoal Dispon??veis";
$output_text_026 = "Estilos nesta categoria n??o s??o aceitos nesta competi????o.";
$output_text_027 = "link para Diretrizes de Estilo do Programa de Certifica????o de Juiz de Cerveja";
$output_text_028 = "";
$output_text_029 = "";
$output_text_030 = "";

$maintenance_text_000 = "O administrador do site retirou o site para manuten????o.";
$maintenance_text_001 = "Por favor, volte mais tarde.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.10-2.1.12 Additions
 * ------------------------------------------------------------------------
 */

$label_entry_numbers = "N??mero(s) de amostra"; // Para PayPal IPN Email
$label_status = "Status"; // Para PayPal IPN Email
$label_amount = "Valor"; // Para PayPal IPN Email
$label_transaction_id = "ID da transa????o"; // Para PayPal IPN Email
$label_organization = "Organiza????o";
$label_ttb = "N??mero TTB";
$label_username = "Nome de usu??rio";
$label_from = "De"; // Para cabe??alhos de email
$label_to = "Para"; // Para cabe??alhos de email
$label_varies = "Varia";
$label_styles_accepted = "Estilos aceitos";
$label_judging_styles = "Julgando Estilos";
$label_select_club = "Selecione ou pesquise seu clube";
$label_select_style = "Selecione ou pesquise o estilo da sua amostra";
$label_select_country = "Selecione ou pesquise seu pa??s";
$label_select_dropoff = "Selecione seu local de entrega";
$label_club_enter = "Digite o nome do clube";
$label_secret_05 = "Qual ?? o nome de solteira de sua av?? materna?";
$label_secret_06 = "Qual foi o primeiro nome da sua primeira namorada ou namorado?";
$label_secret_07 = "Qual foi a marca e modelo do seu primeiro ve??culo?";
$label_secret_08 = "Qual foi o sobrenome do seu professor da terceira s??rie?";
$label_secret_09 = "Em que cidade ou cidade voc?? conheceu seu outro significativo?";
$label_secret_10 = "Qual foi o primeiro nome do seu melhor amigo no sexto ano?";
$label_secret_11 = "Qual ?? o nome do seu artista ou grupo musical favorito?";
$label_secret_12 = "Qual foi seu apelido de inf??ncia?";
$label_secret_13 = "Qual ?? o sobrenome do professor que lhe deu sua primeira nota com falha?";
$label_secret_14 = "Qual ?? o nome do seu amigo de inf??ncia favorito?";
$label_secret_15 = "Em que cidade ou cidade sua m??e e seu pai se conheceram?";
$label_secret_16 = "Qual foi o n??mero de telefone de inf??ncia que voc?? mais lembra, incluindo c??digo de ??rea?";
$label_secret_17 = "Qual foi seu lugar favorito para visitar quando crian??a?";
$label_secret_18 = "Onde voc?? estava quando teve seu primeiro beijo?";
$label_secret_19 = "Em que cidade ou cidade foi seu primeiro emprego?";
$label_secret_20 = "Em que cidade ou cidade voc?? estava no Ano Novo de 2000?";
$label_secret_21 = "Qual ?? o nome de uma faculdade em que voc?? se inscreveu, mas n??o compareceu?";
$label_secret_22 = "Qual ?? o primeiro nome do menino ou menina que voc?? beijou pela primeira vez?";
$label_secret_23 = "Qual foi o nome do seu primeiro bicho de pel??cia, boneco ou boneco de a????o?";
$label_secret_24 = "Em que cidade ou cidade voc?? conheceu seu c??njuge / outro significativo?";
$label_secret_25 = "Em que rua voc?? mora na primeira s??rie?";
$label_secret_26 = "Qual ?? a velocidade da velocidade do ar de uma carga sem carga?";
$label_secret_27 = "Qual ?? o nome do seu programa de TV favorito cancelado?";
$label_pro = "Profissional";
$label_amateur = "Amador";
$label_hosted = "Hospedado";
$label_edition = "Edi????o";
$label_pro_comp_edition = "Edi????o profissional da competi????o";
$label_amateur_comp_edition = "Edi????o de competi????o amadora";
$label_optional_info = "Informa????o Opcional";
$label_or = "Ou";
$label_admin_payments = "Pagamentos";
$label_payer = "Pagador";
$label_pay_with_paypal = "Pague com PayPal";
$label_submit = "Enviar";
$label_id_verification_question = "Pergunta de Verifica????o de ID";
$label_id_verification_answer = "Resposta de verifica????o de ID";
$label_server = "Servidor";
$label_password_reset = "Redefini????o de senha";
$label_id_verification_request = "Pedido de verifica????o de ID";
$label_new_password = "Nova senha";
$label_confirm_password = "Confirmar senha";
$label_with_token = "Com token";
$label_password_strength = "For??a da senha";
$label_entry_shipping = "Envio por correios";
$label_jump_to = "Ir para ...";
$label_top = "Top";

$label_bjcp_cider = "Juiz de Cidra";

$header_text_112 = "Voc?? n??o tem privil??gios de acesso suficientes para executar esta a????o.";
$header_text_113 = "Voc?? pode editar apenas as informa????es da sua conta.";
$header_text_114 = "Como administrador, voc?? pode alterar as informa????es da conta de um usu??rio via Admin> Entradas e Participantes> Gerenciar Participantes.";
$header_text_115 = "Resultados foram publicados.";
$header_text_116 = "Se voc?? n??o receber o email dentro de um prazo razo??vel, entre em contato com um oficial da competi????o ou administrador do site para redefinir sua senha para voc??.";

$alert_text_082 = "Desde que voc?? se inscreveu como juiz ou assistente, voc?? n??o tem permiss??o para adicionar amostras ?? sua conta. Apenas representantes de uma organiza????o podem adicionar amostras ??s suas contas.";
$alert_text_083 = "Adicionar e editar amostras n??o est?? dispon??vel.";
$alert_text_084 = "Como dministrador, voc?? pode adicionar uma amostra ?? conta de uma organiza????o usando o menu suspenso & quot; Adicionar amostra para ...&quot; na p??gina Administra????o &gt; Entradas e participantes &gt; Gerenciar inscri????es.";
$alert_text_085 = "Voc?? n??o conseguir?? imprimir a papelada de qualquer amostra (etiquetas de garrafas, etc.) at?? que o pagamento seja confirmado e tenha sido marcado como & quot; pago & quot; abaixo.";

$brew_text_027 = "Este estilo da Associa????o de Cervejeiros requer uma declara????o do fabricante de cerveja sobre a natureza especial do produto. Veja o <a href=\"https://www.brewersassociation.org/resources/brewers-association-beer-style- guidelines / \"target = \" _ blank \">Orienta????es de Estilo BA </a> para orienta????o espec??fica.";
$brew_text_028 = "*** N??O REQUERIDO *** Adicione informa????es detalhadas nas diretrizes de estilo como uma caracter??stica que voc?? PODE declarar.";
$brew_text_029 = "Edi????o do administrador desativada. Seu perfil ?? considerado um perfil pessoal e n??o um perfil organizacional e, portanto, n??o est?? qualificado para adicionar amostras. Para adicionar uma amostra a uma organiza????o, acesse a lista Gerenciar inscri????es e escolha uma organiza????o em;Adicionar uma amostra para...&quot; dropdown.";

$brewer_text_022 = "Voc?? ser?? capaz de identificar um co-cervejeiro ao adicionar suas amostras.";
$brewer_text_023 = "Selecione <strong>None</strong> se voc?? n??o ?? afiliado a um clube ou associa????o. Selecione <strong>Other</strong> se seu clube n??o estiver na lista - <strong> n??o deixe de usar a caixa de pesquisa </strong>.";
$brewer_text_024 = "Por favor, forne??a seu primeiro nome.";
$brewer_text_025 = "Por favor, forne??a seu sobrenome.";
$brewer_text_026 = "Por favor, forne??a seu n??mero de telefone.";
$brewer_text_027 = "Por favor, forne??a seu endere??o.";
$brewer_text_028 = "Por favor, forne??a sua cidade.";
$brewer_text_029 = "Por favor, forne??a seu estado ou prov??ncia.";
$brewer_text_030 = "Por favor, forne??a o seu CEP ou c??digo postal.";
$brewer_text_031 = "Por favor, escolha o seu pa??s.";
$brewer_text_032 = "Por favor, forne??a o nome da sua organiza????o.";
$brewer_text_033 = "Por favor, forne??a uma pergunta de seguran??a.";
$brewer_text_034 = "Por favor, forne??a uma resposta ?? sua pergunta de seguran??a.";
$brewer_text_035 = "Voc?? passou no exame BJCP de Juiz de Cidra?";

$entry_info_text_047 = "Se o nome de um estilo cont??m um link, ele possui requisitos espec??ficos para a amostra. Clique ou toque no nome para acessar os estilos da Associa????o de Cervejeiros conforme listado em seu site.";

$brewer_entries_text_016 = "Estilo digitado N??O aceito";
$brewer_entries_text_017 = "As inscri????es n??o ser??o exibidas como recebidas at?? que a equipe da competi????o as tenha marcado como tal no sistema. Normalmente, isso ocorre DEPOIS todas as amostras foram coletadas de todos os locais de entrega e classificadas.";
$brewer_entries_text_018 = "Voc?? n??o poder?? imprimir a papelada desta amostra (etiquetas de garrafas, etc.) at?? que seja marcada como paga.";
$brewer_entries_text_019 = "A impress??o de documentos da amostra n??o est?? dispon??vel no momento.";
$brewer_entries_text_020 = "A edi????o das inscri????es n??o est?? dispon??vel no momento. Se voc?? deseja editar sua inscri????o, entre em contato com um oficial da competi????o.";

if (SINGLE) $brewer_info_000 = "Ol??";
else $brewer_info_000 = "Obrigado por participar do";
$brewer_info_001 = "Os detalhes da sua conta foram atualizados pela ??ltima vez";
$brewer_info_002 = "Reserve um momento para <a href=\"#entries\"> revisar suas amostras</a>";
$brewer_info_003 = "pague as taxas de inscri????o</a>";
$brewer_info_004 = "por amostra";
$brewer_info_005 = "?? necess??ria uma afilia????o ?? American Homebrewers Association (AHA) se uma de suas inscri????es for selecionada para um Grande Festival Americano de Cerveja Pro-Am.";
$brewer_info_006 = "Imprima etiquetas de envio para anexar ?? sua caixa (s) de garrafas.";
$brewer_info_007 = "Imprimir etiquetas de remessa";
$brewer_info_008 = "Voc?? j?? foi atribu??do a uma tabela como";
$brewer_info_009 = "Se voc?? deseja alterar sua disponibilidade e / ou retirar sua fun????o, contate o organizador da competi????o ou o coordenador do juiz.";
$brewer_info_010 = "Voc?? j?? foi designado como";
$brewer_info_011 = "ou";
$brewer_info_012 = "Imprima suas etiquetas de avalia????o de pontua????o";

$pay_text_030 = "Ao clicar no &quot;Entendo; bot??o a baixo, voc?? ser?? direcionado para o PayPal para efetuar seu pagamento. Depois de ter <strong> conclu??do </ strong> o seu pagamento, o PayPal o redirecionar?? para este site e envie um recibo por e-mail para a transa????o. <strong> Se o pagamento foi bem-sucedido, seu status pago ser?? atualizado automaticamente. ?? poss??vel que voc?? precise aguardar alguns minutos para que o status do pagamento seja atualizado. </ strong> atualize a p??gina de pagamento ou acesse sua lista de amostras. ";
$pay_text_031 = "Sobre sair deste site";
$pay_text_032 = "Nenhum pagamento ?? necess??rio. Obrigado!";
$pay_text_033 = "Voc?? tem amostras n??o pagas. Clique para pagar suas amostras.";

$register_text_035 = "As informa????es que voc?? fornece al??m do nome da sua organiza????o s??o estritamente para fins de registro e manuten????o.";
$register_text_036 = "Uma condi????o para entrar na competi????o ?? fornecer essas informa????es, incluindo o endere??o de e-mail e o n??mero de telefone de uma pessoa de contato. O nome da sua organiza????o pode ser exibido se uma das suas inscri????es for publicada.";
$register_text_037 = "Confirma????o de inscri????o";
$register_text_038 = "Um administrador registrou voc?? para uma conta. O seguinte ?? a confirma????o da entrada de informa????o:";
$register_text_039 = "Obrigado por registrar uma conta. A confirma????o a seguir ?? da informa????o que voc?? forneceu:";
$register_text_040 = "Se alguma das informa????es acima estiver incorreta,";
$register_text_041 = "fa??a login na sua conta";
$register_text_042 = "e fa??a as altera????es necess??rias. Boa sorte na competi????o!";
$register_text_043 = "Por favor, n??o responda a este e-mail, pois ele ?? gerado automaticamente. A conta de origem n??o est?? ativa nem monitorada.";
$register_text_044 = "Por favor, forne??a um nome de organiza????o.";
$register_text_045 = "Forne??a um nome para a cervejaria, nome do brewpub, etc. Certifique-se de verificar as informa????es da competi????o para tipos de bebidas aceitos.";
$register_text_046 = "Apenas para organiza????es dos EUA.";

$user_text_004 = "Certifique-se de usar letras mai??sculas e min??sculas, n??meros e caracteres especiais para uma senha mais forte.";
$user_text_005 = "Seu endere??o de e-mail atual ??";

$login_text_017 = "Envie-me minha resposta da pergunta de seguran??a";
$login_text_018 = "Seu nome de usu??rio (endere??o de email) ?? obrigat??rio.";
$login_text_019 = "Sua senha ?? necess??ria.";
$login_text_020 = "O token fornecido ?? inv??lido ou j?? foi usado. Por favor, use a fun????o de senha esquecida novamente para gerar um novo token de redefini????o de senha.";
$login_text_021 = "O token fornecido expirou. Por favor, use a fun????o de senha esquecida novamente para gerar um novo token de redefini????o de senha.";
$login_text_022 = "O e-mail que voc?? digitou n??o est?? associado ao token fornecido. Por favor, tente novamente.";
$login_text_023 = "As senhas n??o combinam. Por favor, tente novamente.";
$login_text_024 = "?? necess??ria uma senha de confirma????o.";
$login_text_025 = "Esqueceu sua senha?";
$login_text_026 = "Digite o endere??o de e-mail da sua conta e a nova senha abaixo.";
$login_text_027 = "Sua senha foi reiniciada com sucesso. Agora voc?? pode entrar com a nova senha.";

$winners_text_005 = "O (s) vencedor (es) da Best of Show ainda n??o foi publicado. Por favor, volte mais tarde.";

$paypal_response_text_000 = "Seu pagamento foi conclu??do. Os detalhes da transa????o s??o fornecidos aqui para sua conveni??ncia.";
$paypal_response_text_001 = "Por favor, note que voc?? receber?? uma comunica????o oficial do PayPal no endere??o de e-mail listado abaixo.";
$paypal_response_text_002 = "Boa sorte na competi????o!";
$paypal_response_text_003 = "Por favor, n??o responda a este e-mail, pois ele ?? gerado automaticamente. A conta de origem n??o est?? ativa nem monitorada.";
$paypal_response_text_004 = "O PayPal processou sua transa????o.";
$paypal_response_text_005 = "O status do seu pagamento pelo PayPal ??:";
$paypal_response_text_006 = "A resposta do Paypal foi inv??lida. & quot; Por favor, tente efetuar o seu pagamento novamente. ";
$paypal_response_text_007 = "Por favor, entre em contato com o organizador da competi????o se voc?? tiver alguma d??vida.";
$paypal_response_text_008 = "Pagamento PayPal inv??lido";
$paypal_response_text_009 = "Detalhes do pagamento via PayPal";

$pwd_email_reset_text_000 = "Foi feita uma solicita????o para verificar a conta no";
$pwd_email_reset_text_001 = "website usando a fun????o de e-mail Verification ID. Se voc?? n??o iniciou isto, entre em contato com o organizador da competi????o.";
$pwd_email_reset_text_002 = "A resposta de verifica????o de ID faz distin????o entre mai??sculas e min??sculas";
$pwd_email_reset_text_003 = "Foi feita uma solicita????o para alterar sua senha no";
$pwd_email_reset_text_004 = "website. Se voc?? n??o iniciou isto, n??o se preocupe. Sua senha n??o pode ser redefinida sem o link abaixo.";
$pwd_email_reset_text_005 = "Para redefinir sua senha, clique no link abaixo ou copie / cole no seu navegador.";

$best_brewer_text_000 = "cervejeiros participantes";
$best_brewer_text_001 = "HM";
$best_brewer_text_002 = "Os desempatadores foram aplicados de acordo com a <a href=\"#\" data-toggle=\"modal\" data-target=\"#scoreMethod\"> metodologia de pontua????o </a>. ";
$best_brewer_text_003 = "Metodologia de pontua????o";
$best_brewer_text_004 = "Cada amostra de coloca????o recebe os seguintes pontos:";
$best_brewer_text_005 = "Os seguintes desempatadores foram aplicados, em ordem de prioridade:";
$best_brewer_text_006 = "O maior n??mero total de primeiro, segundo e terceiro lugares.";
$best_brewer_text_007 = "O maior n??mero total de lugares de primeira, segunda, terceira, quarta e men????o honrosa.";
$best_brewer_text_008 = "O maior n??mero de primeiros lugares.";
$best_brewer_text_009 = "O menor n??mero de amostras.";
$best_brewer_text_010 = "A pontua????o m??nima mais alta.";
$best_brewer_text_011 = "A maior pontua????o m??xima.";
$best_brewer_text_012 = "A pontua????o m??dia mais alta.";
$best_brewer_text_013 = "N??o utilizado.";
$best_brewer_text_014 = "clubes participantes";

$dropoff_qualifier_text_001 = "Por favor, preste aten????o nas notas fornecidas para cada local de entrega, pois podem haver especificidades, tais como, diferentes prazos, hor??rios e pessoas espec??ficas para deixar as amostras. <strong class=\"text-danger\">Os participantes s??o respons??veis por ler as informa????es fornecidas pelos organizadores para cada local de entrega.</strong>";

$brewer_text_036 = "Como voc?? escolheu <em> Outros</em>, verifique se o clube que voc?? ingressou n??o est?? na nossa lista de forma semelhante.";
$brewer_text_037 = "Por exemplo, voc?? pode ter entrado a sigla do seu clube em vez do nome completo.";
$brewer_text_038 = "Nomes de clubes consistentes entre os usu??rios s??o essenciais para os c??lculos do \"Melhor Clube\", se implementados para esta competi????o.";
$brewer_text_039 = "O clube que voc?? entrou anteriormente n??o corresponde a um da nossa lista.";
$brewer_text_040 = "Por favor, escolha da lista ou escolha <em> Outro </em> e digite o nome do seu clube.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.13 Additions
 * ------------------------------------------------------------------------
 */

$entry_info_text_048 = "Para garantir um julgamento adequado, o participante deve fornecer informa????es adicionais sobre a bebida.";
$entry_info_text_049 = "Para garantir um julgamento adequado, o participante deve fornecer o n??vel de for??a da bebida.";
$entry_info_text_050 = "Para garantir um julgamento adequado, o participante deve fornecer o n??vel de carbonata????o da bebida.";
$entry_info_text_051 = "Para garantir um julgamento adequado, o participante deve fornecer o n??vel de do??ura da bebida.";
$entry_info_text_052 = "Ao entrar nesta categoria, o participante deve fornecer mais informa????es para que a entrada seja julgada com precis??o. Quanto mais informa????o, melhor.";

$output_text_028 = "As seguintes entradas t??m poss??veis al??rgenos - como entrada pelos participantes.";
$output_text_029 = "Nenhum participante forneceu informa????es sobre al??rgenos para suas inscri????es.";

$label_this_style = "Esse Estilo";
$label_notes = "Notas";
$label_possible_allergens = "Poss??veis Al??rgenos";
$label_please_choose = "Por favor Escolha";
$label_mead_cider_info = "Mead/Cider Info";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.10-2.1.14 Additions
 * ------------------------------------------------------------------------
 */

$label_winners = "Vencedores";
$label_unconfirmed_entries = "Entradas n??o Confirmadas";
$label_recipe = "Receita";
$label_view = "Vis??o";
$label_number_bottles = "N??mero de Garrafas Necess??rias por Entrada";
$label_pro_am = "Pro-Am";

$pay_text_034 = "O limite de entradas pagas foi atingido - pagamentos adicionais n??o est??o sendo aceitos.";

$bottle_labels_000 = "Os r??tulos n??o podem ser gerados no momento.";
$bottle_labels_001 = "Certifique-se de verificar as regras de aceita????o de participa????o na competi????o para diretrizes espec??ficas de fixa????o de r??tulos antes de enviar!";
$bottle_labels_002 = "Tipicamente, ?? usada fita de embalagem transparente para fixar ao barril de cada entrada - cobrir completamente a etiqueta.";
$bottle_labels_003 = "Normalmente, uma faixa de borracha ?? usada para fixar etiquetas em cada entrada.";
if (isset($_SESSION['jPrefsBottleNum'])) $bottle_labels_004 = "Observa????o: s??o fornecidas 4 etiquetas como cortesia. Esta competi????o requer ".$_SESSION['jPrefsBottleNum']." garrafas por inscri????o. Descarte qualquer etiqueta extra.";
else $bottle_labels_004 = "Observa????o: s??o fornecidas 4 etiquetas como cortesia. Descarte qualquer etiqueta extra.";
$bottle_labels_005 = "Se algum item estiver faltando, feche esta janela e edite a entrada.";
$bottle_labels_006 = "Espa??o reservado para uso do pessoal da competi????o.";
$bottle_labels_007 = "ESTE FORMUL??RIO DE RECEITA ?? APENAS PARA SEUS REGISTROS - N??O inclua uma c??pia dele na remessa de entrada.";

$brew_text_040 = "N??o h?? necessidade de especificar o gl??ten como al??rgeno para qualquer estilo de cerveja; sup??e-se que estar?? presente. As cervejas sem gl??ten devem ser inseridas na categoria Cerveja sem gl??ten (BA) ou na categoria Cerveja alternativa de gr??os (BJCP). Apenas especifique o gl??ten como al??rgeno nos estilos de hidromel ou sidra se uma fonte ferment??vel contiver gl??ten (por exemplo, malte de cevada, trigo ou centeio) ou se o fermento de cerveja foi usado.";

$brewer_text_041 = "Voc?? j?? recebeu a oportunidade Pro-Am de competir na pr??xima competi????o Pro-Am do Great American Beer Festival?";
$brewer_text_042 = "Se voc?? j?? recebeu um Pro-Am ou j?? fez parte da equipe de cervejarias de qualquer cervejaria, indique-o aqui. Isso ajudar?? a equipe da competi????o e os representantes da cervejaria Pro-Am (se aplic??vel a esta competi????o) a escolher as entradas Pro-Am de cervejeiros que n??o possuem uma.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.15 Additions
 * ------------------------------------------------------------------------
 */

$label_submitting = "Enviando";
$label_additional_info = "Entradas com informa????es adicionais";
$label_working = "Trabalhando";

$output_text_030 = "Por favor espere.";

$brewer_entries_text_021 = "Verifique as entradas para imprimir suas etiquetas de garrafa. Marque a caixa de sele????o superior para marcar ou desmarcar todas as caixas na coluna.";
$brewer_entries_text_022 = "Imprimir Todas as Etiquetas de Garrafas para Entradas Verificadas";
$brewer_entries_text_023 = "Os r??tulos dos frascos ser??o abertos em uma nova guia ou janela.";
$brewer_entries_text_024 = "Imprimir Etiquetas de Garrafa";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.18 Additions
 * ------------------------------------------------------------------------
 */

$output_text_031 = "Pressione Esc para ocultar.";
$styles_entry_text_21X = "O participante DEVE especificar uma for??a (sess??o: 3,0-5,0%, padr??o: 5,0-7,5%, duplo: 7,5-9,5%).";
$styles_entry_text_PRX4 = "O participante deve especificar os tipos de frutas frescas usadas.";

/**
 * ------------------------------------------------------------------------
 * Version 2.1.19 Additions
 * ------------------------------------------------------------------------
 */

$output_text_032 = "A contagem de entradas reflete apenas os participantes que indicaram um local de entrega em seu perfil de conta. O n??mero real de entradas pode ser maior ou menor.";
$brewer_text_043 = "Ou voc?? est?? ou j?? trabalhou na equipe de cervejaria de qualquer cervejaria? Isso inclui posi????es de cervejeiro, bem como t??cnicos de laborat??rio, equipe de adega, equipe de engarrafamento / conservas, etc. Os funcion??rios atuais e antigos da equipe de cervejaria n??o s??o eleg??veis para participar da competi????o Pro-Am do Great American Beer Festival.";
$label_entrant_reg = "Registro de Participantes";
$sidebar_text_026 = "est??o no sistema a partir de";
$label_paid_entries = "Entradas Pagas";

/**
 * ------------------------------------------------------------------------
 * Version 2.2.0 Additions
 * Via Google Translate English to Portuguese - and for that, I'm sorry. :)
 * ------------------------------------------------------------------------
 */

$alert_text_086 = "O Internet Explorer n??o ?? compat??vel com o BCOE&M - recursos e fun????es n??o ser??o renderizados corretamente e sua experi??ncia n??o ser?? a ideal. Por favor, atualize para um navegador mais recente.";
$alert_text_087 = "Para uma experi??ncia ideal e para que todos os recursos e fun????es sejam executados corretamente, habilite o JavaScript para continuar usando este site. Caso contr??rio, ocorrer?? um comportamento inesperado.";
$alert_text_088 = "A apresenta????o dos pr??mios estar?? dispon??vel publicamente ap??s a publica????o dos resultados.";
$alert_text_089 = "Os dados arquivados n??o est??o dispon??veis.";

$brewer_entries_text_025 = "Imprimir folhas de pontua????o dos ju??zes";

$brewer_info_013 = "Voc?? foi designado como juiz.";
$brewer_info_014 = "Acesse o painel de julgamento usando o bot??o abaixo para inserir avalia????es das entradas atribu??das a voc??.";

$contact_text_004 = "Os organizadores da competi????o n??o especificaram nenhum contato.";

$label_thank_you = "Obrigado";
$label_congrats_winners = "Parab??ns a Todos os Vencedores de Medalhas";
$label_placing_entries = "Colocando Entradas";
$label_by_the_numbers = "Estatisticas";
$label_launch_pres = "Apresenta????o de Pr??mios de Lan??amento";
$label_entrants = "Competidores";

$label_judging_dashboard = "Painel de Julgamento";
$label_table_assignments = "Tarefas de Mesa";
$label_table = "Mesa";
$label_edit = "Editar";
$label_add = "Adicione";
$label_disabled = "Inv??lido";
$label_judging_scoresheet = "Folha de Pontua????o de Julgamento";
$label_checklist_version = "Vers??o da Lista de Verifica????o";
$label_classic_version = "Vers??o Cl??ssica";
$label_structured_version = "Vers??o Estruturada";
$label_submit_evaluation = "Enviar Avalia????o";
$label_edit_evaluation = "Editar Avalia????o";
$label_your_score = "Sua Pontua????o";
$label_your_assigned_score = "Sua Pontua????o de Consenso Inserida";
$label_assigned_score = "Pontua????o de Consenso";
$label_accepted_score = "Pontua????o Oficial Aceita";
$label_recorded_scores = "Pontua????es de Consenso Inseridas";
$label_go = "Ir";
$label_go_back = "Volte";
$label_na = "N/A";
$label_evals_submitted = "Avalia????es Enviadas";
$label_evaluations = "Avalia????es de Entrada";
$label_submitted_by = "Enviado por";
$label_attention = "Aten????o!";
$label_unassigned_eval = "Avalia????es n??o Atribu??das";
$label_head_judge = "Juiz Mor";
$label_lead_judge = "Juiz Principal";
$label_mini_bos_judge = "Juiz Mini-BOS";
$label_view_my_eval = "Ver Minha Avalia????o";
$label_view_other_judge_eval = "Ver a Avalia????o de Outro Juiz";
$label_place_awarded = "Lugar concedido";
$label_honorable_mention = "Men????o honrosa";
$label_places_awarded_table = "Lugares premiados nesta mesa";
$label_places_awarded_duplicate = "Lugares duplicados concedidos nesta mesa";

$evaluation_info_000 = "O pool de entrada para cada uma das tabelas e voos que foram atribu??dos a voc?? ?? detalhado abaixo.";
$evaluation_info_001 = "Esta competi????o est?? empregando julgamento em fila. Se houver mais de um par de ju??zes em sua mesa, avalie a pr??xima entrada na fila estabelecida.";
$evaluation_info_002 = "Para garantir uma competi????o precisa e tranquila, voc?? e seu (s) parceiro (s) de ju??zes S?? devem julgar as inscri????es em sua mesa que ainda n??o foram avaliadas. Consulte seu organizador ou coordenador de ju??zes se tiver alguma d??vida.";
$evaluation_info_003 = "Aguardando aceita????o final de um administrador do site.";
$evaluation_info_004 = "Sua pontua????o de consenso foi inserida.";
$evaluation_info_005 = "Esta entrada n??o faz parte do seu voo atribu??do.";
$evaluation_info_006 = "Edite conforme necess??rio.";
$evaluation_info_007 = "Escolha uma das seguintes entradas nesta tabela.";
$evaluation_info_008 = "Para registrar sua avalia????o, selecione o bot??o Adicionar correspondente de uma entrada. Apenas as tabelas das sess??es de julgamento anteriores e atuais est??o dispon??veis.";
$evaluation_info_009 = "Voc?? foi designado como juiz, mas n??o foi designado para nenhuma mesa (s) ou v??o (s) no sistema. Por favor, verifique com o organizador ou coordenador do juiz.";
$evaluation_info_010 = "Esta entrada faz parte do seu voo atribu??do.";
$evaluation_info_011 = "Adicione uma avalia????o para uma entrada n??o atribu??da a voc??.";
$evaluation_info_012 = "Use apenas quando for solicitado a avaliar uma entrada que n??o faz parte da tabela atribu??da.";
$evaluation_info_013 = "A entrada n??o foi encontrada.";
$evaluation_info_014 = "Verifique o n??mero de entrada de seis caracteres e tente novamente.";
$evaluation_info_015 = "Certifique-se de que o n??mero tenha 6 d??gitos.";
$evaluation_info_016 = "Nenhuma avalia????o registrada.";
$evaluation_info_017 = "As pontua????es de consenso inseridas pelos ju??zes n??o correspondem.";
$evaluation_info_018 = "A verifica????o ?? necess??ria para as seguintes entradas:";
$evaluation_info_019 = "As seguintes entradas t??m apenas uma avalia????o enviada:";
$evaluation_info_020 = "Seu painel de julgamento estar?? dispon??vel"; // Punctuation omitted intentionally
$evaluation_info_021 = "para adicionar avalia????es para entradas atribu??das a voc??"; // Punctuation omitted intentionally
$evaluation_info_022 = "O envio de julgamento e avalia????o est?? encerrado.";
$evaluation_info_023 = "Se voc?? tiver alguma d??vida, entre em contato com o organizador da competi????o ou coordenador de ju??zes.";
$evaluation_info_024 = "Voc?? foi atribu??do ??s seguintes tabelas. As listas de inscri????es para cada mesa ser??o exibidas apenas para as sess??es de julgamento anteriores e atuais.";
$evaluation_info_025 = "Ju??zes designados para esta mesa:";
$evaluation_info_026 = "Todas as pontua????es de consenso inseridas pelos ju??zes coincidem.";
$evaluation_info_027 = "Entradas que voc?? completou, ou que um administrador inseriu em seu nome, que n??o foram atribu??das a voc?? no sistema.";
$evaluation_info_028 = "A sess??o de julgamento terminou.";
$evaluation_info_029 = "Lugares duplicados foram atribu??dos nas seguintes tabelas:";
$evaluation_info_030 = "Os administradores precisar??o inserir as entradas de coloca????o que permanecerem.";
$evaluation_info_031 = "avalia????es foram adicionadas pelos ju??zes";
$evaluation_info_032 = "V??rias avalia????es para uma ??nica inscri????o foram enviadas por um juiz.";
$evaluation_info_033 = "Embora seja uma ocorr??ncia incomum, uma avalia????o duplicada pode ser enviada devido a problemas de conectividade, etc. Uma ??nica avalia????o registrada para cada juiz deve ser oficialmente aceita - todas as outras devem ser exclu??das para evitar confus??o entre os participantes.";
$evaluation_info_034 = "Ao avaliar estilos de tipo especialidade, use esta linha para comentar sobre caracter??sticas exclusivas a ela, como frutas, especiarias, ferment??veis, acidez, etc.";
$evaluation_info_035 = "Fa??a coment??rios sobre estilo, receita, processo e prazer ao beber. Inclua sugest??es ??teis para o cervejeiro.";
if (isset($_SESSION['jPrefsScoreDispMax'])) $evaluation_info_036 = "Uma ou mais pontua????es de ju??zes est??o fora da faixa de pontua????o aceit??vel. ".$_SESSION['jPrefsScoreDispMax']. " ou menos ?? o intervalo aceit??vel..";
$evaluation_info_037 = "Todos os voos nesta tabela parecem estar completos.";
$evaluation_info_038 = "Como Juiz Principal, ?? sua responsabilidade verificar se as pontua????es de consenso de cada inscri????o correspondem, certificar-se de que todas as pontua????es dos ju??zes para cada inscri????o est??o dentro da faixa apropriada e atribuir lugares ??s inscri????es designadas.";
$evaluation_info_039 = "Inscri????es nesta mesa:";
$evaluation_info_040 = "Entradas pontuadas nesta mesa:";
$evaluation_info_041 = "Entradas pontuadas em seu voo:";
$evaluation_info_042 = "Suas entradas pontuadas:";
$evaluation_info_043 = "Ju??zes com avalia????es nesta mesa:";

$label_submitted = "Submetido";
$label_ordinal_position = "Posi????o Ordinal em Voo";
$label_alcoholic = "Alco??lico";
$descr_alcoholic = "O aroma, sabor e efeito de aquecimento do etanol e ??lcoois superiores. ??s vezes descrito como &quot;quente&quot;.";
$descr_alcoholic_mead = "O efeito do etanol. Aquecimento. Quente.";
$label_metallic = "Met??lico"; 
$descr_metallic = "Sabor a estanho, moeda, cobre, ferro ou sangue.";
$label_oxidized = "Oxidado";
$descr_oxidized = "Qualquer um ou combina????o de aromas e sabores ran??osos, vinosos, de papel??o, papel ou xerez. Desatualizado.";
$descr_oxidized_cider = "Envelhecimento, o aroma / sabor de xerez, passas ou frutas machucadas.";
$label_phenolic = "Fen??lico";
$descr_phenolic = "Picante (cravo, pimenta), fumegante, pl??stico, fita adesiva de pl??stico e / ou medicinal (clorofen??lico).";
$label_vegetal = "Vegetal";
$descr_vegetal = "Aroma e sabor de vegetais cozidos, enlatados ou podres (repolho, cebola, aipo, aspargos, etc.).";
$label_astringent = "Adstringente";
$descr_astringent = "Franzido, aspereza persistente e / ou secura no final / gosto residual; granula????o severa; rouquid??o.";
$descr_astringent_cider = "Uma sensa????o de secura na boca semelhante a mastigar um saquinho de ch??. Deve estar em equil??brio, se presente.";
$label_acetaldehyde = "Acetalde??do";
$descr_acetaldehyde = "Aroma e sabor de ma???? verde.";
$label_diacetyl = "Diacetil";
$descr_diacetyl = "Aroma e sabor de manteiga artificial, caramelo ou caramelo. ??s vezes percebido como uma mancha na l??ngua.";
$descr_diacetyl_cider = "Aroma ou sabor de manteiga ou caramelo.";
$label_dms = "DMS (Dimetil Sulfeto)";
$descr_dms = "Em n??veis baixos, um aroma e sabor doce, parecido com milho cozido ou enlatado.";
$label_estery = "Estery";
$descr_estery = "Aroma e / ou sabor de qualquer ??ster (frutas, aromas de frutas ou rosas).";
$label_grassy = "Gram??neo";
$descr_grassy = "Aroma / sabor a erva acabada de cortar ou a folhas verdes.";
$label_light_struck = "Atingido por luz";
$descr_light_struck = "Semelhante ao aroma de um gamb??.";
$label_musty = "Mofado";
$descr_musty = "Aromas / sabores ran??osos, mofados ou mofados.";
$label_solvent = "Solvente";
$descr_solvent = "Aromas e sabores de ??lcoois superiores (??lcoois fusel). Semelhante a aromas de acetona ou diluente de laca.";
$label_sour_acidic = "Azedo/??cido";
$descr_sour_acidic = "Acidez no aroma e sabor. Pode ser cortante e limpo (??cido l??ctico) ou semelhante ao vinagre (??cido ac??tico).";
$label_sulfur = "Enxofre";
$descr_sulfur = "O aroma de ovos podres ou f??sforos acesos.";
$label_sulfury = "Enxofre";
$label_yeasty = "Fermento";
$descr_yeasty = "Aroma ou sabor a p??o, enxofre ou levedura.";
$label_acetified = "Acetificado (Acidez Vol??til)";
$descr_acetified = "Acetato de etila (solvente, esmalte de unha) ou ??cido ac??tico (vinagre, ??spero no fundo da garganta).";
$label_acidic = "??cido";
$descr_acidic = "Sabor azedo. Normalmente de um dos v??rios ??cidos: m??lico, l??ctico ou c??trico. Deve estar em equil??brio.";
$descr_acidic_mead = "Sabor / aroma limpo e ??cido de baixo pH. Normalmente de um dos v??rios ??cidos: m??lico, l??tico, gluc??nico ou c??trico.";
$label_bitter = "Amargo";
$descr_bitter = "Um sabor forte que ?? desagrad??vel em n??veis mais altos.";
$label_farmyard = "Fazenda";
$descr_farmyard = "Semelhante a estrume (vaca ou porco) ou curral (est??bulo de cavalo em um dia quente).";
$label_fruity = "Frutado";
$descr_fruity = "O aroma e o sabor das frutas frescas podem ser apropriados para alguns estilos e n??o para outros.";
$descr_fruity_mead = "??steres de sabor e aroma geralmente derivados de frutas em um melomel. Banana e abacaxi costumam ter sabores estranhos.";
$label_mousy = "Semelhante a um Rato";
$descr_mousy = "Sabor que evoca o cheiro da toca de um roedor.";
$label_oaky = "Carvalho";
$descr_oaky = "Um sabor ou aroma devido a um longo per??odo de tempo em um barril ou em aparas de madeira. &quot;Car??ter de barril.&quot;";
$label_oily_ropy = "Oleoso/Viscoso";
$descr_oily_ropy = "Um brilho na apar??ncia visual, como um personagem viscoso desagrad??vel que se transforma em um personagem pegajoso.";
$label_spicy_smoky = "Picante/Enfuma??ado";
$descr_spicy_smoky = "Spice, cravo, fum??, presunto.";
$label_sulfide = "Sulfureto";
$descr_sulfide = "Ovos podres, por problemas de fermenta????o.";
$label_sulfite = "Sulfito";
$descr_sulfite = "F??sforos ardentes, por sulfita????o excessiva / recente.";
$label_sweet = "Doce";
$descr_sweet = "Gosto b??sico de a????car. Deve estar em equil??brio, se presente.";
$label_thin = "Fino";
$descr_thin = "Aguado. Sem corpo.";
$label_acetic = "Ac??tico";
$descr_acetic = "Vinagre, ??cido ac??tico, forte.";
$label_chemical = "Qu??mico";
$descr_chemical = "Vitamina, nutriente ou sabor qu??mico.";
$label_cloying = "Enjoativo";
$descr_cloying = "Xarope, excessivamente doce, desequilibrado por ??cido / tanino.";
$label_floral = "Floral";
$descr_floral = "O aroma de flores em flor ou perfume.";
$label_moldy = "Mofado";
$descr_moldy = "Aromas / sabores ran??osos, mofados, mofados ou com rolha.";
$label_tannic = "T??nico";
$descr_tannic = "Sensa????o na boca seca, adstringente e adstringente, semelhante ao sabor amargo. Gosto de ch?? forte sem a????car ou mastiga????o de casca de uva.";
$label_waxy = "Ceroso";
$descr_waxy = "Como cera, sebo, gorduroso.";
$label_medicinal = "Medicinal";
$label_spicy = "Picante";
$label_vinegary = "Vinagre";
$label_plastic = "Pl??stico";
$label_smoky = "Enfuma??ado";

$label_inappropriate = "Inapropriado";
$label_possible_points = "Pontos Poss??veis";
$label_malt = "Malte";
$label_ferm_char = "Car??ter de Fermenta????o";
$label_body = "Corpo";
$label_creaminess = "Cremosidade";
$label_astringency = "Adstring??ncia";
$label_warmth = "Calor";
$label_appearance = "Apar??ncia";
$label_flavor = "Sabor";
$label_mouthfeel = "Sensa????o na Boca";
$label_overall_impression = "Impress??o Geral";
$label_balance = "Saldo";
$label_finish_aftertaste = "Gosto Residual";
$label_hoppy = "Hoppy";
$label_malty = "Maltado";
$label_comments = "Coment??rios";
$label_flaws = "Falhas de Estilo";
$label_flaw = "Falha";
$label_flawless = "Sem Falhas";
$label_significant_flaws = "Falhas Significativas";
$label_classic_example = "Exemplo Cl??ssico";
$label_not_style = "N??o Estilizar";
$label_tech_merit = "M??rito T??cnico";
$label_style_accuracy = "Precis??o Estil??stica";
$label_intangibles = "Intangivel";
$label_wonderful = "Maravilhosa";
$label_lifeless = "Sem Vida";
$label_feedback = "Coment??rios";
$label_honey = "Mel";
$label_alcohol = "??lcool";
$label_complexity = "Complexidade";
$label_viscous = "Viscoso";
$label_legs = "Pernas"; // Used to describe liquid clinging to glass
$label_clarity = "Clareza";
$label_brilliant = "Brilhante";
$label_hazy = "Nebuloso";
$label_opaque = "Opaco";
$label_fruit = "Fruta";
$label_acidity = "Acidez";
$label_tannin = "Tanino";

$label_white = "Branco";
$label_straw = "Cor de Palha";
$label_yellow = "Amarelo";
$label_gold = "Ouro";
$label_copper = "Cobre";
$label_quick = "R??pido";
$label_long_lasting = "De Longa Dura????o";
$label_ivory = "Cor de Marfim";
$label_beige = "Bege";
$label_tan = "Cor Morena";
$label_lacing = "La??o";
$label_particulate = "Particulado";
$label_black = "Preto";
$label_large = "Ampla";
$label_small = "Pequeno";
$label_size = "Tamanho";
$label_retention = "Reten????o";
$label_head = "Cabe??a"; // beer foam / head
$label_head_size = "Tamanho da Cabe??a";
$label_head_retention = "Reten????o de Cabe??a";
$label_head_color = "Cor da Cabe??a";
$label_brettanomyces = "Brettanomyces";
$label_cardboard = "Cart??o";
$label_cloudy = "Nublado";
$label_sherry = "Xerez";
$label_harsh = "??spero";
$label_harshness = "Aspereza";
$label_full = "Cheio";
$label_suggested = "Sugerido";
$label_lactic = "L??ctico";
$label_smoke = "Fuma??a";
$label_spice = "Especiaria";
$label_vinous = "Vinoso";
$label_wood = "Madeira";
$label_cream = "Creme";
$label_flat = "Plano";

$label_descriptor_defs = "Defini????es do descritor";
$label_outstanding = "Excepcional";
$descr_outstanding = "Exemplo de estilo de classe mundial.";
$label_excellent = "Excelente";
$descr_excellent = "Exemplifica bem o estilo, requer um pequeno ajuste fino.";
$label_very_good = "Muito Bom";
$descr_very_good = "Geralmente dentro dos par??metros de estilo, algumas pequenas falhas.";
$label_good = "Bom";
$descr_good = "Perde a marca no estilo e / ou pequenas falhas.";
$label_fair = "Decente";
$descr_fair = "Sabores / aromas estranhos ou defici??ncias de estilo importantes. Desagrad??vel.";
$label_problematic = "Problem??tico";
$descr_problematic = "Os principais sabores e aromas estranhos dominam. Dif??cil de beber.";

/**
 * ------------------------------------------------------------------------
 * Version 2.3.0 Additions
 * Via Google Translate English to Portuguese - and for that, I'm sorry. 
 * Again. :)
 * ------------------------------------------------------------------------
 */

$winners_text_006 = "Observa????o: os resultados desta tabela podem estar incompletos devido ?? entrada insuficiente ou informa????es de estilo.";

$label_elapsed_time = "Tempo decorrido";
$label_judge_score = "Pontua????es do juiz";
$label_judge_consensus_scores = "Pontua????es do consenso do juiz";
$label_your_consensus_score = "Sua pontua????o de consenso";
$label_score_range_status = "Status da faixa de pontua????o";
$label_consensus_caution = "Cuidado de consenso";
$label_consensus_match = "Correspond??ncia de consenso";
$label_score_range_caution = "Cuidado com o intervalo de pontua????o dos ju??zes";
$label_score_range_ok = "Faixa de pontua????o dos ju??zes OK";
$label_auto_log_out = "Logout autom??tico em";
$label_place_previously_selected = "Local Selecionado Anteriormente";
$label_entry_without_eval = "Inscri????o sem avalia????o";
$label_entries_with_eval = "Inscri????es com avalia????o";
$label_entries_without_eval = "Inscri????es sem avalia????o";
$label_judging_close = "Julgando de Fechamento";
$label_session_expire = "A sess??o est?? prestes a expirar";
$label_refresh = "Atualizar esta p??gina";
$label_stay_here = "Fique aqui";
$label_bottle_inspection = "Inspe????o de Garrafa";
$label_bottle_inspection_comments = "Coment??rios de inspe????o de garrafa";
$label_consensus_no_match = "As pontua????es de consenso n??o correspondem";
$label_score_below_courtesy = "A pontua????o inserida est?? abaixo do limite de pontua????o de cortesia";
$label_score_greater_50 = "A pontua????o inserida ?? maior que 50";
$label_score_out_range = "A pontua????o est?? fora do intervalo";
$label_score_range = "Faixa de pontua????o";
$label_ok = "Certo";
$label_esters = "??steres";
$label_phenols = "Fen??is";
$label_descriptors = "Descritores";
$label_grainy = "Granulado";
$label_caramel = "Caramelo";
$label_bready = "Bready";
$label_rich = "Rica";
$label_dark_fruit = "Fruta Escura";
$label_toasty = "Tostado";
$label_roasty = "Torrado";
$label_burnt = "Queimado";
$label_citrusy = "C??trico";
$label_earthy = "Terroso";
$label_herbal = "Erval";
$label_piney = "Piney";
$label_woody = "Woody";
$label_apple_pear = "Ma????/Pera";
$label_banana = "Banana";
$label_berry = "Baga";
$label_citrus = "Citrino";
$label_dried_fruit = "Fruta Seca";
$label_grape = "Uva";
$label_stone_fruit = "Fruta de Caro??o";
$label_even = "Uniforme";
$label_gushed = "Jorrado";
$label_hot = "Quente";
$label_slick = "Liso";
$label_finish = "Terminar";
$label_biting = "Mordendo";
$label_drinkability = "Bebibilidade";
$label_bouquet = "Ramalhete";
$label_of = "Do";
$label_fault = "Culpa";
$label_weeks = "Semanas";
$label_days = "Dias";
$label_scoresheet = "S??mula";
$label_beer_scoresheet = "Folha de Pontua????o da Cerveja";
$label_cider_scoresheet = "Folha de Pontua????o da Cidra";
$label_mead_scoresheet = "Folha de Pontua????o da Hidromel";
$label_consensus_status = "Status de Consenso";

$evaluation_info_044 = "Sua pontua????o de consenso n??o corresponde ??s inseridas por outros ju??zes.";
$evaluation_info_045 = "A pontua????o de consenso inserida corresponde ??quela inserida por ju??zes anteriores.";
$evaluation_info_046 = "A diferen??a de pontua????o ?? maior do que";
$evaluation_info_047 = "A diferen??a de pontua????o est?? dentro da faixa aceit??vel.";
$evaluation_info_048 = "O lugar que voc?? especificou j?? foi inserido para a mesa. Escolha outro local ou nenhum local (nenhum).";
$evaluation_info_049 = "Essas entradas n??o t??m pelo menos uma avalia????o";
$evaluation_info_050 = "Forne??a a posi????o ordinal da entrada no v??o.";
$evaluation_info_051 = "Forne??a o n??mero total de entradas no voo.";
$evaluation_info_052 = "Tamanho apropriado, tampa, n??vel de preenchimento, remo????o de etiqueta, etc.";
$evaluation_info_053 = "A pontua????o consensual ?? a pontua????o final acordada por todos os ju??zes que avaliam a inscri????o. Se a pontua????o de consenso for desconhecida neste momento, insira sua pr??pria pontua????o. Se a pontua????o de consenso inserida aqui diferir daquela inserida por outros ju??zes, voc?? ser?? notificado.";
$evaluation_info_054 = "Esta entrada avan??ou para uma rodada mini-BOS.";
$evaluation_info_055 = "A pontua????o de consenso que voc?? inseriu n??o corresponde ??s inseridas por ju??zes anteriores para esta entrada. Consulte outros ju??zes que est??o avaliando esta inscri????o e revise sua pontua????o de consenso conforme necess??rio.";
$evaluation_info_056 = "A pontua????o que voc?? inseriu est?? abaixo de 13, <a href=\"https://www.bjcp.org/cep/GreatBeerJudging.pdf\" target=\"_blank\">um limite de cortesia comumente conhecido para ju??zes BJCP</a>. Consulte outros ju??zes e revise sua pontua????o conforme necess??rio.";
$evaluation_info_057 = "As pontua????es n??o devem ser inferiores a 5 nem superiores a 50.";
$evaluation_info_058 = "A pontua????o que voc?? inseriu ?? superior a 50, a pontua????o m??xima para qualquer entrada. Reveja e reveja a sua pontua????o de consenso.";
$evaluation_info_059 = "A pontua????o que voc?? forneceu para esta inscri????o est?? fora da faixa de diferen??a de pontua????o entre os ju??zes.";
$evaluation_info_060 = "caracteres no m??ximo";
$evaluation_info_061 = "Por favor, forne??a alguns coment??rios breves.";
$evaluation_info_062 = "Escolha um descritor.";
$evaluation_info_063 = "Eu terminaria esta amostra.";
$evaluation_info_064 = "Eu beberia meio litro desta cerveja.";
$evaluation_info_065 = "Eu pagaria por esta cerveja.";
$evaluation_info_066 = "Eu recomendaria esta cerveja.";
$evaluation_info_067 = "Forne??a uma classifica????o.";
$evaluation_info_068 = "Forne??a a pontua????o de consenso - m??nimo de 5, m??ximo de 50.";
$evaluation_info_069 = "Pelo menos dois ju??zes do voo em que sua inscri????o foi inscrita chegaram a um consenso sobre a pontua????o final atribu??da. N??o ?? necessariamente uma m??dia das pontua????es individuais.";
$evaluation_info_070 = "Com base na planilha de pontua????o BJCP para";
$evaluation_info_071 = "15 minutos se passaram desde que voc?? iniciou sua avalia????o. Embora voc?? deva ter bastante tempo antes de ser desconectado automaticamente, este ?? um aviso de cortesia para certificar-se de concluir sua avalia????o em tempo h??bil para manter o ritmo de julgamento em uma taxa aceit??vel.";
$evaluation_info_072 = "Por padr??o, o Logout autom??tico ?? estendido para 30 minutos para avalia????es de entrada.";

$alert_text_090 = "Sua sess??o ir?? expirar em dois minutos. Voc?? pode permanecer na p??gina atual para terminar seu trabalho antes que o tempo expire, atualizar esta p??gina para continuar sua sess??o atual (os dados do formul??rio podem ser perdidos) ou fazer logout.";
$alert_text_091 = "Sua sess??o ir?? expirar em 30 segundos. Voc?? pode atualizar para continuar sua sess??o atual ou fazer logout.";
$alert_text_092 = "Deve ser definida pelo menos uma sess??o de julgamento para adicionar uma mesa.";

$brewer_entries_text_026 = "As planilhas de pontua????o dos ju??zes para esta inscri????o est??o em v??rios formatos. Cada formato cont??m uma ou mais avalia????es v??lidas desta entrada.";

// Update QR text
$qr_text_008 = "Para fazer o check-in das entradas por meio do c??digo QR, forne??a a senha correta. Voc?? s?? precisar?? fornecer a senha uma vez por sess??o - certifique-se de manter o navegador ou o aplicativo de leitura de c??digo QR aberto.";
$qr_text_015 = "Digitalize o pr??ximo c??digo QR. Para sistemas operacionais mais recentes, acesse o aplicativo da c??mera do seu dispositivo m??vel. Para sistemas operacionais mais antigos, inicie / volte para o aplicativo de digitaliza????o.";
$qr_text_017 = "A leitura de c??digo QR est?? dispon??vel nativamente na maioria dos sistemas operacionais m??veis modernos. Basta apontar sua c??mera para o c??digo QR no r??tulo de uma garrafa e seguir as instru????es. Para sistemas operacionais m??veis mais antigos, um aplicativo de leitura de c??digo QR ?? necess??rio para utilizar este recurso.";
$qr_text_018 = "Digitalize um c??digo QR localizado no r??tulo de um frasco, digite a senha necess??ria e verifique a entrada.";

/**
 * ------------------------------------------------------------------------
 * Version 2.4.0 Additions
 * Via Google Translate English to Portuguese - and for that, I'm sorry. 
 * Again. :)
 * ------------------------------------------------------------------------
 */

$label_select_state = "Selecione ou pesquise o seu estado";
$label_select_below = "Selecione abaixo";
$output_text_033 = "Ao enviar seu relat??rio ao BJCP, ?? poss??vel que nem todos os integrantes da lista de funcion??rios recebam pontos. ?? sugerido que voc?? aloque pontos para aqueles com IDs BJCP primeiro.";
$styles_entry_text_PRX3 = "O participante deve especificar o varietal de uva ou mosto de uva utilizado.";
$styles_entry_text_C1A = "Os participantes DEVEM especificar o n??vel de carbonata????o (3 n??veis). Os participantes DEVEM especificar a do??ura (5 categorias). Se o OG estiver substancialmente acima da faixa t??pica, o entrante deve explicar, por exemplo, a variedade particular de ma???? que d?? suco de alta gravidade.";
$styles_entry_text_C1B = "Os participantes DEVEM indicar o n??vel de carbonata????o (3 n??veis). Os participantes DEVEM indicar a do??ura (seca a m??dia do??ura, 4 n??veis). Os participantes DEVEM indicar a variedade de ma???? para cidra varietal ??nica; se indicado, ?? esperado o car??ter varietal.";
$styles_entry_text_C1C = "Os participantes DEVEM especificar o n??vel de carbonata????o (3 n??veis). Os participantes DEVEM especificar o n??vel de do??ura (somente de m??dia a doce, 3 n??veis). Os participantes PODEM especificar a variedade de ma???? para uma ??nica cidra varietal; se especificado, ser?? esperado um car??ter varietal.";
$winners_text_007 = "N??o h?? entradas vencedoras nesta tabela.";

/**
 * ------------------------------------------------------------------------
 * Version 2.4.0 Additions
 * Via DeepL Translator English to Portuguese - and for that, I'm sorry. 
 * Again. :)
 * ------------------------------------------------------------------------
 */

$label_entries_to_judge = "Entradas para Julgar";
$evaluation_info_073 = "Se voc?? tiver alterado ou adicionado qualquer item ou coment??rio nesta folha de pontua????o, seus dados poder??o ser perdidos se voc?? navegar para longe desta p??gina.";
$evaluation_info_074 = "Se voc?? TENHA feito altera????es, feche este di??logo, role at?? o final da folha de pontua????o e selecione Submeter Avalia????o.";
$evaluation_info_075 = "Se voc?? N??O tiver feito nenhuma mudan??a, selecione o bot??o azul do Painel de Julgamento abaixo.";
$evaluation_info_076 = "Comente sobre malte, l??pulo, ??steres e outros arom??ticos.";
$evaluation_info_077 = "Comente sobre cor, clareza e cabe??a (reten????o, cor e textura).";
$evaluation_info_078 = "Comente sobre malte, l??pulo, caracter??sticas de fermenta????o, equil??brio, acabamento/sabor, e outras caracter??sticas de sabor.";
$evaluation_info_079 = "Coment??rio sobre o corpo, carbona????o, calor, cremosidade, adstring??ncia e outras sensa????es palatinas.";
$evaluation_info_080 = "Comente sobre o prazer geral de beber associado ?? entrada, d?? sugest??es para melhorias.";

if ($_SESSION['prefsStyleSet'] == "BJCP2021") {
    $styles_entry_text_21B = "O participante DEVE especificar uma for??a (sess??o, padr??o, duplo); se nenhuma for??a for especificada, o padr??o ser?? assumido. O participante DEVE especificar o tipo espec??fico de Especialidade IPA da lista de Tipos Definidos Atualmente identificados nas Diretrizes de Estilo, ou conforme emendado pelos Estilos Provis??rios no site do BJCP; OU o participante DEVE descrever o tipo de Especialidade IPA e suas principais caracter??sticas em forma de coment??rios para que os ju??zes saibam o que esperar. Os participantes PODEM especificar as variedades espec??ficas de l??pulo utilizadas, se os participantes acharem que os ju??zes podem n??o reconhecer as caracter??sticas varietais dos l??pulos mais recentes. Os participantes PODEM especificar uma combina????o de tipos IPA definidos (por exemplo, IPA Centeio Negro) sem fornecer descri????es adicionais.";
    $styles_entry_text_24C = "O participante DEVE especificar a Bi??re de Garde loira, ??mbar ou marrom.";
    $styles_entry_text_25B = "O participante DEVE especificar a for??a (tabela, padr??o, super) e a cor (p??lido, escuro). O participante PODE identificar os gr??os de car??ter utilizados.";
    $styles_entry_text_27A = "Categoria para outras cervejas hist??ricas que N??O tenham sido definidas pelo BJCP. O participante DEVE fornecer uma descri????o para os ju??zes do estilo hist??rico que N??O ?? um dos exemplos de estilo hist??rico definido atualmente fornecidos pelo BJCP. Exemplos atualmente definidos: Kellerbier, Kentucky Common, Lichtenhainer, London Brown Ale, Piwo Grodziskie, Pre-Prohibition Lager, Pre-Prohibition Porter, Roggenbier, Sahti. Se uma cerveja ?? entrada apenas com um nome de estilo e sem descri????o, ?? muito improv??vel que os ju??zes entendam como julg??-la.";
    $styles_entry_text_28A = "O participante DEVE especificar ou um Estilo Base, ou fornecer uma descri????o dos ingredientes, especifica????es, ou car??ter desejado. O participante PODE especificar as linhagens de Brett utilizadas.";
    $styles_entry_text_28B = "O participante DEVE especificar uma descri????o da cerveja, identificando a levedura ou as bact??rias usadas e um Estilo Base, ou os ingredientes, especifica????es, ou o car??ter alvo da cerveja.";
    $styles_entry_text_28C = "O participante DEVE especificar qualquer ingrediente de tipo especial (por exemplo, fruta, especiarias, ervas ou madeira) utilizado. O participante DEVE especificar ou uma descri????o da cerveja, identificando a levedura ou as bact??rias usadas e um Estilo Base, ou os ingredientes, especifica????es, ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_29A = "O participante DEVE especificar o(s) tipo(s) de fruta(s) utilizado(s). O participante DEVE especificar uma descri????o da cerveja, identificando um Estilo Base ou os ingredientes, especifica????es ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.  Cervejas de fruta baseadas no estilo cl??ssico devem ser inseridas neste estilo, exceto a Lambic.";
    $styles_entry_text_29B = "O participante deve especificar o tipo de fruta e o tipo de SHV utilizado; os ingredientes individuais de SHV n??o precisam ser especificados se for utilizada uma mistura bem conhecida de especiarias (por exemplo, especiarias de torta de ma????). O participante deve especificar uma descri????o da cerveja, seja um Estilo Base ou os ingredientes, especifica????es ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_29C = "O entrante DEVE especificar o tipo de fruta utilizada. O participante DEVE especificar o tipo de ingrediente adicional (conforme a introdu????o) ou processo especial empregado. O participante DEVE especificar uma descri????o da cerveja, identificando um Estilo Base ou os ingredientes, especifica????es ou car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_29D = "O entrante DEVE especificar o tipo de uva utilizada. O participante PODE fornecer informa????es adicionais sobre o estilo de base ou ingredientes caracter??sticos.";
    $styles_entry_text_30A = "O participante DEVE especificar o tipo de especiarias, ervas ou vegetais utilizados, mas os ingredientes individuais n??o precisam ser especificados se for utilizada uma mistura de especiarias bem conhecida (por exemplo, especiarias para torta de ma????, caril em p??, chili em p??). O participante DEVE especificar uma descri????o da cerveja, identificando um Estilo Base ou os ingredientes, especifica????es ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_30B = "O participante DEVE especificar o tipo de especiarias, ervas ou vegetais utilizados; os ingredientes individuais n??o precisam ser especificados se for utilizada uma mistura bem conhecida de especiarias (por exemplo, tempero para torta de ab??bora). O participante DEVE especificar uma descri????o da cerveja, identificando um Estilo Base ou os ingredientes, especifica????es ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_30C = "O participante DEVE especificar o tipo de especiarias, a????cares, frutas ou ferment??veis adicionais utilizados; os ingredientes individuais n??o precisam ser especificados se for utilizada uma mistura bem conhecida de especiarias (por exemplo, especiarias mulling). O participante DEVE especificar uma descri????o da cerveja, identificando um Estilo Base ou os ingredientes, especifica????es ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_30D = "O participante DEVE especificar o tipo de SHV utilizado, mas os ingredientes individuais n??o precisam ser especificados se for utilizada uma mistura de especiarias bem conhecida (por exemplo, especiarias para torta de ma????, caril em p??, pimenta em p??). O participante DEVE especificar o tipo de ingrediente adicional (de acordo com a introdu????o) ou o processo especial empregado. O participante DEVE especificar uma descri????o da cerveja, identificando um Estilo Base ou os ingredientes, especifica????es ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_31A = "O participante deve especificar o tipo de gr??o alternativo utilizado. O participante deve especificar uma descri????o da cerveja, identificando o Estilo Base ou os ingredientes, especifica????es ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_31B = "O entrante DEVE especificar o tipo de a????car utilizado. O participante DEVE especificar uma descri????o da cerveja, identificando um Estilo Base ou os ingredientes, especifica????es ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_32A = "O participante DEVE especificar um Estilo Base. O participante DEVE especificar o tipo de madeira ou fuma??a se um caractere varietal de fuma??a for percept??vel.";
    $styles_entry_text_32B = "O entrante DEVE especificar o tipo de madeira ou fuma??a se um car??ter de fuma??a varietal for percept??vel. O entrante DEVE especificar os ingredientes ou processos adicionais que fazem desta uma cerveja defumada especial. O participante DEVE especificar uma descri????o da cerveja, identificando um estilo base ou os ingredientes, especifica????es, ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_33A = "O entrante DEVE especificar o tipo de madeira utilizada e o n??vel de torrada ou char (se usado). Se for usada uma madeira varietal incomum, o participante DEVE fornecer uma breve descri????o dos aspectos sensoriais que a madeira acrescenta ?? cerveja. O entrante DEVE especificar uma descri????o da cerveja, identificando o Estilo Base ou os ingredientes, especifica????es ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_33B = "O participante DEVE especificar o car??ter alco??lico adicional, com informa????es sobre o barril se relevante para o perfil de sabor acabado. Se uma madeira ou ingrediente incomum tiver sido utilizado, o participante DEVE fornecer uma breve descri????o dos aspectos sensoriais que os ingredientes acrescentam ?? cerveja. O entrante DEVE especificar uma descri????o da cerveja, identificando o Estilo Base ou os ingredientes, especifica????es ou o car??ter alvo da cerveja. Uma descri????o geral da natureza especial da cerveja pode cobrir todos os itens necess??rios.";
    $styles_entry_text_34A = "O participante DEVE especificar o nome da cerveja comercial, especifica????es (estat??sticas vitais) para a cerveja e uma breve descri????o sensorial ou uma lista de ingredientes usados na fabrica????o da cerveja. Sem esta informa????o, os ju??zes que n??o estiverem familiarizados com a cerveja n??o ter??o base para compara????o.";
    $styles_entry_text_34B = "O participante DEVE especificar o Estilo ou Estilos Base utilizados, e quaisquer ingredientes especiais, processos ou varia????es envolvidas. O participante PODE fornecer uma descri????o adicional do perfil sensorial da cerveja ou as estat??sticas vitais da cerveja resultante.";
    $styles_entry_text_PRX3 = "O entrante DEVE especificar o tipo de uva utilizada. O participante PODE fornecer informa????es adicionais sobre o estilo de base ou ingredientes caracter??sticos.";
}

/**
 * ------------------------------------------------------------------------
 * Version 2.5.0 Additions
 * Via DeepL Translator English to Portuguese - and for that, I'm sorry. 
 * Again. :)
 * ------------------------------------------------------------------------
 */

$register_text_047 = "Sua pergunta e/ou resposta de seguran??a mudou.";
$register_text_048 = "Se voc?? n??o iniciou esta mudan??a, sua conta pode estar comprometida. Voc?? deve entrar imediatamente em sua conta e alterar sua senha, al??m de atualizar sua pergunta e resposta de seguran??a.";
$register_text_049 = "Se voc?? n??o conseguir entrar em sua conta, voc?? deve entrar imediatamente em contato com um administrador do site para atualizar sua senha e outras informa????es vitais da conta.";
$register_text_050 = "A resposta de sua pergunta de seguran??a ?? criptografada e n??o pode ser lida pelos administradores do site. Ela deve ser inserida se voc?? optar por mudar sua pergunta e/ou resposta de seguran??a.";
$register_text_051 = "Informa????es de Conta Atualizadas";
$register_text_052 = "Uma resposta de Sim ou N??o ?? necess??ria para cada local abaixo.";
$brewer_text_044 = "Voc?? deseja mudar sua pergunta e/ou resposta de seguran??a?";
$brewer_text_045 = "N??o se registraram resultados.";
$brewer_text_046 = "Para a entrada de nomes de clubes de forma livre, alguns s??mbolos n??o s??o permitidos, incluindo ampersand (&amp;), marcas de cota????es simples (&#39;), marcas de cota????es duplas (&quot;), e porcentagem (&#37;).";
$brewer_text_047 = "Se voc?? n??o estiver dispon??vel para qualquer uma das sess??es listadas abaixo, mas ainda pode servir como funcion??rio em outra fun????o, selecione Sim.";
$brewer_text_048 = "Enviarei por correios";
$brewer_text_049 = "Selecione \"N??o Aplic??vel\" se voc?? n??o planeja apresentar nenhuma participa????o na competi????o.";
$brewer_text_050 = "Selecione \"Enviarei por correios\" se voc?? planeja encaixotar e enviar suas entradas para o local de embarque fornecido.";
$label_change_security = "Mudar pergunta/resposta de seguran??a?";
$label_semi_dry = "Semi-Seco";
$label_semi_sweet = "Semi-Doce";
$label_shipping_location = "Localiza????o da Expedi????o";
$volunteers_text_010 = "O pessoal pode indicar sua disponibilidade para as seguintes sess??es sem ju??zos de valor:";

$evaluation_info_081 = "Coment??rio sobre a express??o do mel, ??lcool, ??steres, complexidade e outros arom??ticos.";
$evaluation_info_082 = "Coment??rio sobre cor, clareza, pernas e carbonata????o.";
$evaluation_info_083 = "Coment??rio sobre mel, do??ura, acidez, tanino, ??lcool, equil??brio, corpo, carbonata????o, gosto residual e quaisquer ingredientes especiais ou sabores espec??ficos de estilo.";
$evaluation_info_084 = "Comente sobre o prazer geral de beber associado ?? entrada, d?? sugest??es para melhorias.";
$evaluation_info_085 = "Cor (2), clareza (2), n??vel de carbonata????o (2).";
$evaluation_info_086 = "Express??o de outros ingredientes, conforme apropriado.";
$evaluation_info_087 = "Equil??brio de acidez, do??ura, gradua????o alco??lica, corpo, carbonata????o (se apropriado) (14), Outros ingredientes, se apropriado (5), Gosto residual (5).";
$evaluation_info_088 = "Comente sobre o prazer geral de beber associado ?? entrada, d?? sugest??es para melhorias.";

$evaluation_info_089 = "Contagem m??nima de palavras atingida ou excedida.";
$evaluation_info_090 = "Obrigado por fornecer a avalia????o mais completa poss??vel. Palavras totais: ";
$evaluation_info_091 = "Palavras m??nimas necess??rias para seus coment??rios: ";
$evaluation_info_092 = "A contagem de palavras at?? o momento: ";
$evaluation_info_093 = "O requisito m??nimo de palavras n??o foi alcan??ado no campo de Feedback de Impress??o Geral acima.";
$evaluation_info_094 = "O requisito m??nimo de palavras n??o foi alcan??ado em um ou mais campos de feedback / coment??rio acima.";

/**
 * ----------------------------------------------------------------------------------
 * END TRANSLATIONS
 * ----------------------------------------------------------------------------------
 */

/**
 * ----------------------------------------------------------------------------------
 * Various conditionals
 * No translations below this line
 * ----------------------------------------------------------------------------------
 */

if (strpos($section, "step") === FALSE) $alert_text_032 = $alert_text_032; else $alert_text_032 = "";
if (strpos($section, "step") === FALSE) $alert_text_033 = $alert_text_033; else $alert_text_033 = "";
if (strpos($section, "step") === FALSE) $alert_text_036 = $alert_text_036; else $alert_text_036 = "";
if (strpos($section, "step") === FALSE) $alert_text_039 = $alert_text_039; else $alert_text_039 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_043 = $alert_text_043; else $alert_text_043 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_047 = $alert_text_047; else $alert_text_047 = "";
if (strpos($section, "step") === FALSE) $alert_text_050 = $alert_text_050; else $alert_text_050 = "";
if (strpos($section, "step") === FALSE) $alert_text_053 = $alert_text_053; else $alert_text_053 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_060 = $alert_text_060; else $alert_text_060 = "";
if (strpos($section, "step") === FALSE) $alert_text_068 = $alert_text_068; else $alert_text_068 = "";
if (strpos($section, "step") === FALSE) $alert_text_070 = $alert_text_070; else $alert_text_070 = "";
if (strpos($section, "step") === FALSE) $label_character_limit = $label_character_limit; else $label_character_limit = "";
if (strpos($section, "step") === FALSE) $header_text_031 = $header_text_031; else $header_text_031 = "";
if (strpos($section, "step") === FALSE) $beerxml_text_007 = $beerxml_text_007; else $beerxml_text_007 = "";

/**
 * ----------------------------------------------------------------------------------
 * Admin Pages - Admin pages will be included in a future release
 * ----------------------------------------------------------------------------------
 */
// if ($section == "admin") include (LANG.'en_admin.lang.php');

?>