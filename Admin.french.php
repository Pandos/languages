<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Sites';
$txt['admin_users'] = 'Membres';
$txt['admin_newsletters'] = 'Infolettres';
$txt['admin_edit_news'] = 'Nouvelles';
$txt['admin_groups'] = 'Groupes de membres';
$txt['admin_members'] = 'Gestion des membres';
$txt['admin_members_list'] = 'Ci-dessous une liste de tous les membres actuellement inscrits sur votre forum.';
$txt['admin_next'] = 'Suivant';
$txt['admin_censored_words'] = 'Mots censurés';
$txt['admin_censored_where'] = 'Écrivez le mot à censurer à gauche, et ce par quoi il est remplacé à droite.';
$txt['allow_no_censored'] = 'Autoriser les utilisateurs à désactiver la censure des mots';
$txt['admin_censored_desc'] = 'Etant donné la nature publique des forums, vous souhaitez peut-être censurer certains mots. Ci-dessous, vous pouvez entrer n\'importe quel mot que vous voudriez voir censuré à chaque fois qu\'un membre l\'utilise.<br>Videz une boîte du mot qu\'elle contient pour enlever celui-ci.';
$txt['admin_reserved_names'] = 'Noms réservés';
$txt['admin_template_edit'] = 'Modifier le modèle (template) de votre forum';
$txt['admin_modifications'] = 'Options';
$txt['admin_security_moderation'] = 'Sécurité et Modération';
$txt['admin_server_settings'] = 'Paramètres du Serveur';
$txt['admin_reserved_set'] = 'Choix des noms réservés';
$txt['admin_reserved_line'] = 'Un seul mot réservé par ligne.';
$txt['admin_basic_settings'] = 'Cette page vous permet de modifier les paramètres de base de votre forum. Soyez très vigilant avec ces réglages, puisqu\'ils peuvent rendre votre forum inopérant.';
$txt['admin_maintain'] = 'Activer le Mode Maintenance';
$txt['admin_title'] = 'Nom du forum';
$txt['admin_url'] = 'URL du forum';
$txt['cookie_name'] = 'Nom du cookie (témoin)';
$txt['admin_webmaster_email'] = 'Adresse e-mail du webmestre';
$txt['admin_from_email'] = 'Adresse e-mail du champ Expéditeur à l\'envoi';
$txt['boarddir'] = 'Répertoire de Wedge';
$txt['sourcesdir'] = 'Répertoire des sources';
$txt['cachedir'] = 'Répertoire Cache';
$txt['admin_news'] = 'Afficher la barre de nouvelles';
$txt['admin_guest_post'] = 'Permettre aux invités de poster';
$txt['admin_manage_members'] = 'Membres';
$txt['admin_main'] = 'Admin';
$txt['admin_config'] = 'Configuration';
$txt['admin_version_check'] = 'Vérification détaillée de la version';
$txt['admin_wedgefile'] = 'Fichiers Wedge';
$txt['admin_wedgepackage'] = 'Wedge';
$txt['admin_maintenance'] = 'Serveur et Maintenance';
$txt['admin_image_text'] = 'Montrer les boutons en tant qu\'images plutôt qu\'en textes';
$txt['admin_credits'] = 'Crédits';
$txt['admin_agreement'] = 'Afficher et exiger l\'accord des conditions lors de l\'inscription&nbsp;?';
$txt['admin_agreement_default'] = 'Défaut';
$txt['admin_agreement_select_language'] = 'Langue à modifier';
$txt['admin_agreement_select_language_change'] = 'Changer';
$txt['admin_delete_members'] = 'Supprimer les membres sélectionnés';
$txt['admin_repair'] = 'Réparer tous les sites et sujets';
$txt['admin_news_desc'] = 'SVP, ne placez qu\'une seule nouvelle par zone de texte. Quelques balises BBC, comme <span title="Le gras, c\'est la vie">[b]</span>, <span title="Italiques">[i]</span> et <span title="C\'est bien de le souligner">[u]</span> sont autorisées dans vos nouvelles, ainsi que les smileys. Enlevez tout le texte d\'une zone de texte pour la désactiver.';
$txt['administrators'] = 'Administrateurs du forum';
$txt['admin_reserved_desc'] = 'Les noms réservés vont empêcher les utilisateurs de s\'inscrire sous certains identifiants ou d\'utiliser certains mots dans leur pseudonyme. Choisissez les options que vous souhaitez utiliser ci-dessous avant de soumettre la liste.';
$txt['admin_activation_email'] = 'Envoyer un e-mail d\'activation aux nouveaux membres lors de l\'inscription';
$txt['admin_match_whole'] = 'Concordance avec le seul nom complet. Décoché, la recherche s\'effectuera à l\'intérieur des pseudos.';
$txt['admin_match_case'] = 'Concordance avec la casse. Si décoché, recherchera sans porter attention à la casse.';
$txt['admin_check_user'] = 'Vérifier les identifiants.';
$txt['admin_check_display'] = 'Vérifier les pseudonymes.';
$txt['admin_newsletter_send'] = 'Vous pouvez envoyer un e-mail à n\'importe qui à partir de cette page. Les adresses e-mail des groupes de membres sélectionnés devraient apparaîre ci-dessous, mais vous pouvez enlever ou ajouter n\'importe quelle adresse de votre choix. Veillez à vérifiez de séparer chaque adresse selon ce format&nbsp;: \'adresse1@qqch.com; adresse2@qqch.com\'.';
$txt['admin_fader_delay'] = 'Délai d\'enchaînement entre les nouvelles rotatives';

$txt['admin_backup_fail'] = 'Impossible de créer une copie de secours (backup) de Settings.php. Assurez-vous que Settings_bak.php existe et possède les bons droits d\'accès.';
$txt['modSettings_info'] = 'Changer ou régler les paramètres qui contrôlent le fonctionnement du forum.';
$txt['database_server'] = 'Serveur de base de données';
$txt['database_user'] = 'Nom d\'utilisateur de la base de données';
$txt['database_password'] = 'Mot de passe de la base de données';
$txt['database_name'] = 'Nom de la base de données';
$txt['registration_agreement'] = 'Accord d\'inscription';
$txt['registration_agreement_desc'] = 'L\'accord d\'inscription est affiché lorsqu\'une personne crée un nouveau compte membre sur le forum et doit être accepté pour que l\'inscription soit validée.';
$txt['database_prefix'] = 'Préfixe des tables';
$txt['errors_list'] = 'Liste des erreurs du forum';
$txt['errors_found'] = 'Les erreurs suivantes affectent votre forum (vide si aucune)';
$txt['errors_fix'] = 'Voulez-vous essayer de corriger ces erreurs&nbsp;?';
$txt['errors_do_recount'] = 'Toutes les erreurs ont été corrigées. Une section de sauvetage a été créée&nbsp;! Cliquez sur le bouton ci-dessous pour recalculer quelques statistiques importantes.';
$txt['errors_recount_now'] = 'Recalculer les Statistiques';
$txt['errors_fixing'] = 'Règle les erreurs du forum';
$txt['errors_fixed'] = 'Toutes les erreurs sont réglées&nbsp;! Regardez toutes les catégories, les sites et sujets existants et choisissez ce que vous voulez en faire.';
$txt['attachments_avatars'] = 'Fichiers joints et avatars';
$txt['attachments_desc'] = 'À partir d\'ici, vous pouvez administrer les fichiers joints à votre forum par vos utilisateurs. Vous pouvez supprimer les fichiers joints par taille et par date de votre système. Les statistiques concernant les fichiers attachés sont présentées ci-dessous.';
$txt['attachment_stats'] = 'Statistiques des fichiers joints';
$txt['attachment_integrity_check'] = 'Vérification d\'intégrité des Fichiers joints';
$txt['attachment_integrity_check_desc'] = 'Cette opération vérifiera l\'intégrité et la taille des fichiers joints listés dans la base de données, et corrigera les disparités si nécessaire.';
$txt['attachment_check_now'] = 'Vérifier maintenant';
$txt['attachment_pruning'] = 'Suppression de fichiers joints';
$txt['attachment_pruning_message'] = 'Messages à ajouter';
$txt['attachment_pruning_warning'] = 'Êtes-vous sûr de vouloir supprimer ces fichiers joints ?\\nL\'opération est irréversible !';
$txt['attachment_total'] = 'Fichiers joints au total';
$txt['attachmentdir_size'] = 'Taille totale du répertoire des fichiers joints';
$txt['attachmentdir_size_current'] = 'Taille totale du répertoire des fichiers joints actuel';
$txt['attachment_space'] = 'Espace total disponible dans le répertoire des fichiers joints';
$txt['attachment_space_current'] = 'Espace total disponible dans le répertoire des fichiers joints actuel';
$txt['attachment_options'] = 'Paramètres des Fichiers joints';
$txt['attachment_remove_old'] = 'Supprimer les fichiers joints plus anciens que';
$txt['attachment_remove_size'] = 'Supprimer les fichiers joints plus gros que';
$txt['attachment_name'] = 'Nom du fichier attaché';
$txt['attachment_file_size'] = 'Taille du fichier';
$txt['attachmentdir_size_not_set'] = 'Aucune taille maximale n\'est actuellement fixée';
$txt['attachment_delete_admin'] = '[Fichier joint supprimé par l\'administrateur]';
$txt['live'] = 'En direct de Wedge.org&hellip;';
$txt['remove_all'] = 'Supprimer tout';
$txt['approve_new_members'] = 'Les admins doivent approuver tous les nouveaux membres';
$txt['agreement_not_writable'] = 'Attention - agreement.txt n\'est PAS accessible en écriture. Les changements effectués ne seront PAS sauvegardés';

$txt['version_check_desc'] = 'Cette section vous montre les versions des logiciels de votre serveur, et compare les versions de vos fichiers aux dernières en date. Si l\'un de ceux-ci n\'est pas à jour, vous devriez télécharger et installer la dernière version de Wedge sur <a href="http://wedge.org/" target="_blank" class="new_win">wedge.org</a>.';
$txt['version_check_more'] = '(plus de détails)';

$txt['lfyi'] = 'Impossible de récupérer les news de Wedge.org.';

$txt['manage_calendar'] = 'Calendrier';
$txt['manage_search'] = 'Recherche';

$txt['smileys_manage'] = 'Smileys et icônes';
$txt['smileys_manage_info'] = 'Installer des nouveaux jeux de smileys, ajouter des nouveaux smileys à des jeux existants ou gérez vos icônes de messages.';
$txt['package_info'] = 'Installer des nouvelles fonctionnalités ou en modifier certaines à l\'aide de cette interface.';
$txt['theme_admin'] = 'Thèmes et disposition';
$txt['theme_admin_info'] = 'Créer, gérer et paramétrer vos thèmes.';
$txt['registration_center'] = 'Inscriptions';
$txt['member_center_info'] = 'Voir la liste des membres, rechercher des utilisateurs et gérer les inscrits en cours d\'approbation ou d\'activation.';

$txt['viewmembers_name'] = 'Pseudonyme';
$txt['viewmembers_online'] = 'Dernière connexion';
$txt['viewmembers_today'] = 'Aujourd\'hui';
$txt['viewmembers_day_ago'] = 'jour';
$txt['viewmembers_days_ago'] = 'jours';

$txt['display_name'] = 'Pseudonyme';
$txt['email_address'] = 'Adresse e-mail';
$txt['ip_address'] = 'Adresse IP';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'inconnu';
$txt['security_wrong'] = 'Tentative de connexion à l\'administration&nbsp;!' . "\n" . 'Référant : %1$s' . "\n" . 'User-Agent : %2$s' . "\n" . 'IP : %3$s';

$txt['email_as_html'] = 'Envoyer au format HTML. (Vous pouvez utiliser du HTML normal dans cet e-mail.)';
$txt['email_parsed_html'] = 'Ajouter les balises &lt;br /&gt; et &amp;nbsp; au message.';
$txt['email_variables'] = 'Dans ce message, vous pouvez utiliser quelques &quot;variables&quot;. Cliquez <a href="' . $scripturl . '?action=help;in=emailmembers" onclick="return reqWin(this);">ici</a> pour plus d\'informations.';
$txt['email_force'] = 'Envoyer ce message aux membres même s\'ils ont choisi de ne pas recevoir d\'annonces.';
$txt['email_as_pms'] = 'Envoyer ceci à ces groupes par la messagerie personnelle.';
$txt['email_continue'] = 'Continuer';
$txt['email_done'] = 'terminé.';

$txt['ban_title'] = 'Bannissements';
$txt['ban_ip'] = 'Bannissement d\'IP&nbsp;: (ex. 192.168.12.213 or 128.0.*.*) - une entrée par ligne';
$txt['ban_email'] = 'Bannissement d\'e-mails&nbsp;: (ex. pasbeau@pasgentil.com) - une entrée par ligne';
$txt['ban_username'] = 'Bannissement de membres&nbsp;: (ex. pasbeau_du_75) - une entrée par ligne';

$txt['ban_description'] = 'Ici vous pouvez bannir les personnes problématiques par IP, par domaine, par membre ou par adresse e-mail.';
$txt['ban_add_new'] = 'Bannir un Membre';
$txt['ban_banned_entity'] = 'Type de bannissement';
$txt['ban_on_ip'] = 'Ban. par IP (ex. 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Ban. Par domaine (ex. *.mil)';
$txt['ban_on_email'] = 'Ban. par adresse e-mail (ex. *@sitepasbien.com)';
$txt['ban_on_username'] = 'Ban. par membre';
$txt['ban_notes'] = 'Notes';
$txt['ban_restriction'] = 'Restriction';
$txt['ban_full_ban'] = 'Ban. complet';
$txt['ban_partial_ban'] = 'Ban. partiel';
$txt['ban_cannot_post'] = 'Ne peut pas poster';
$txt['ban_cannot_register'] = 'Ne peut pas s\'inscrire';
$txt['ban_cannot_login'] = 'Ne peut pas se connecter';
$txt['ban_add'] = 'Ajouter';
$txt['ban_edit_list'] = 'Liste des Bannissements';
$txt['ban_type'] = 'Type';
$txt['ban_days'] = 'jour(s)';
$txt['ban_will_expire_within'] = 'Le bannissement se terminera après';
$txt['ban_added'] = 'Ajouté';
$txt['ban_expires'] = 'Expiration';
$txt['ban_hits'] = 'Hits';
$txt['ban_actions'] = 'Actions';
$txt['ban_expiration'] = 'Expiration';
$txt['ban_reason_desc'] = 'Raison du bannissement, à afficher au membre banni.';
$txt['ban_notes_desc'] = 'Notes pouvant informer les autres membres du staff.';
$txt['ban_remove_selected'] = 'Supprimer la sélection';
$txt['ban_remove_selected_confirm'] = 'Voulez-vous vraiment supprimer les bannissements sélectionnés ?';
$txt['ban_modify'] = 'Modifier';
$txt['ban_name'] = 'Nom du bannissement';
$txt['ban_edit'] = 'Modifier les bannissements';
$txt['ban_add_notes'] = '<strong>Note</strong>&nbsp;: après la création du bannissement ci-dessus, vous pourrez ajouter des entrées additionnelles qui déclenchent le bannissement, comme les adresses IP, les noms d\'hôtes et les adresses e-mail.';
$txt['ban_expired'] = 'Expiré / désactivé';
$txt['ban_restriction_empty'] = 'Aucune restriction sélectionnée.';

$txt['ban_triggers'] = 'Déclencheurs';
$txt['ban_add_trigger'] = 'Ajouter un déclencheur de bannissement';
$txt['ban_add_trigger_submit'] = 'Ajouter';
$txt['ban_edit_trigger'] = 'Modifier';
$txt['ban_edit_trigger_title'] = 'Modifier les déclencheurs de bannissement';
$txt['ban_edit_trigger_submit'] = 'Modifier';
$txt['ban_remove_selected_triggers'] = 'Supprimer les déclencheurs sélectionnés';
$txt['ban_no_entries'] = 'Aucun bannissement n\'est actuellement actif.';
$txt['ban_remove_selected_triggers_confirm'] = 'Êtes-vous sûr de vouloir supprimer les déclencheurs de bannissement sélectionnés ?';
$txt['ban_trigger_browse'] = 'Liste des Déclencheurs';
$txt['ban_trigger_browse_description'] = 'Cette interface montre toutes les entrées de bannissements groupées selon l\'adresse IP, nom hôte, adresse e-mail et nom d\'utilisateur.';
$txt['ban_no_triggers'] = 'Aucun déclencheur de bannissement pour le moment.';

$txt['settings_not_writable'] = 'Ces paramètres ne peuvent pas être changés car Settings.php est accessible en lecture seulement.';

$txt['maintain_title'] = 'Maintenance Forum';
$txt['maintain_info'] = 'Optimisez les tables, effectuez des copies de sauvegarde, recherchez les erreurs et réparez le forum avec ces outils.';
$txt['maintain_sub_database'] = 'Base de données';
$txt['maintain_sub_routine'] = 'Routinières';
$txt['maintain_sub_members'] = 'Membres';
$txt['maintain_sub_topics'] = 'Sujets';
$txt['maintain_done'] = 'La tâche de maintenance \'%1$s\' a été accomplie avec succès.';
$txt['maintain_no_errors'] = 'Félicitations, aucune erreur n\'a été trouvée&nbsp;! Merci d\'avoir effectué une vérification.';

$txt['maintain_tasks'] = 'Tâches planifiées';
$txt['maintain_tasks_desc'] = 'Organiser les tâches planifiées par Wedge.';

$txt['scheduled_log'] = 'Journal des Tâches';
$txt['scheduled_log_desc'] = 'Liste les tâches exécutées.';
$txt['admin_log'] = 'Journal d\'Administration';
$txt['admin_log_desc'] = 'Liste les tâches administratives ayant été exécutées par les admins de votre forum.';
$txt['moderation_log'] = 'Journal de Modération';
$txt['moderation_log_desc'] = 'Liste les activités de modération ayant été exécutées par les modérateurs de votre forum.';
$txt['spider_log'] = 'Journal des Robots';
$txt['spider_log_desc'] = 'Voir les entrées correspondant à l\'activité des moteurs de recherche sur votre forum.';
$txt['errlog_desc'] = 'Le Journal d\'erreurs traque toutes les erreurs rencontrées sur votre forum. Pour supprimer une erreur de la base de données, cochez le champ et cliquez sur le bouton %1$s au bas de la page.';
$txt['errlog_no_entries'] = 'Aucune erreur à signaler dans le journal.';

// Repeating the same strings, but for the Log menu, so you can shorten them if you want.
$txt['log_error'] = 'Erreurs';
$txt['log_ban'] = 'Bannissements';
$txt['log_scheduled'] = 'Tâches';
$txt['log_admin'] = 'Administration';
$txt['log_moderation'] = 'Modération';
$txt['log_spider'] = 'Robots';
$txt['log_settings'] = 'Paramètres';
$txt['log_settings_desc'] = 'Cette section vous permet de paramétrer les divers journaux, et de supprimer leurs entrées les plus anciennes.';

$txt['mailqueue_title'] = 'Paramètres E-mail';

$txt['db_error_send'] = 'Envoyer un e-mail lors d\'une erreur de connexion à la base de données';
$txt['db_persist'] = 'Utiliser une connexion permanente';
$txt['ssi_db_user'] = 'Nom d\'utilisateur de la Base de données à utiliser en mode SSI';
$txt['ssi_db_passwd'] = 'Mot de passe de la Base de données à utiliser en mode SSI';

$txt['default_language'] = 'Langue par défaut du forum';

$txt['maintenance_subject'] = 'Sujet à afficher';
$txt['maintenance_message'] = 'Message à afficher';

$txt['theme_settings'] = 'Paramètres du thème';
$txt['theme_current_settings'] = 'Thème en cours';

$txt['dvc_your'] = 'Votre version';
$txt['dvc_current'] = 'Version courante';
$txt['dvc_sources'] = 'Sources';
$txt['dvc_default'] = 'Par défaut';
$txt['dvc_templates'] = 'Modèles actuels';
$txt['dvc_languages'] = 'Fichiers de langue';

$txt['smileys_default_set_for_theme'] = 'Sélectionner le jeu de smileys pour ce thème';
$txt['smileys_no_default'] = '(utiliser le jeu de smileys global par défaut)';

$txt['censor_test'] = 'Tester les mots censurés';
$txt['censor_test_save'] = 'Test';
$txt['censor_case'] = 'Ignorer la casse lors de la censure';
$txt['censor_whole_words'] = 'Vérifier les mots entiers seulement';

$txt['admin_confirm_password'] = '(confirmer)';
$txt['admin_incorrect_password'] = 'Mot de passe Incorrect';

$txt['date_format'] = '(AAAA-MM-JJ)';
$txt['undefined_gender'] = 'Non défini';
$txt['age'] = 'Âge';
$txt['activation_status'] = 'Statut d\'activation';
$txt['activated'] = 'Activé';
$txt['not_activated'] = 'Non activé';
$txt['primary'] = 'En Primaire';
$txt['additional'] = 'En Additionnel';
$txt['wild_cards_allowed'] = 'Les jokers * et ? sont permis';
$txt['search_for'] = 'Rechercher';
$txt['member_part_of_these_membergroups'] = 'Le membre fait partie de ces groupes de membres';
$txt['membergroups'] = 'Groupes de membres';
$txt['confirm_delete_members'] = 'Êtes-vous sûr de vouloir supprimer les membres sélectionnés ?';

$txt['support_credits_title'] = 'Support et crédits';
$txt['support_credits_info'] = 'Pour obtenir de l\'aide, des réponses aux questions fréquemment posées et les informations de version à fournir si vous avez un problème.';
$txt['support_title'] = 'Informations de support';
$txt['support_versions_current'] = 'Dernière version de Wedge';
$txt['support_versions_forum'] = 'Votre version du forum';
$txt['support_versions_php'] = 'Version de PHP';
$txt['support_versions_db'] = 'Version %1$s';
$txt['support_versions_server'] = 'Version du serveur';
$txt['support_versions_gd'] = 'Version de GD';
$txt['support_versions'] = 'Infos sur la version';

$txt['support_latest'] = 'Questions fréquentes &amp; réponses';
$txt['support_latest_fetch'] = 'Recherche les informations de support&hellip;';

$txt['edit_permissions_info'] = 'Changer les restrictions et les options disponibles globalement ou sur certains sites spécifiques.';
$txt['membergroups_members'] = 'Membres inscrits';
$txt['membergroups_guests'] = 'Invités';
$txt['membergroups_guests_na'] = 'n/a';
$txt['membergroups_add_group'] = 'Ajouter un groupe';
$txt['membergroups_permissions'] = 'Permissions';

$txt['permitgroups_restrict'] = 'Restreint';
$txt['permitgroups_standard'] = 'Standard';
$txt['permitgroups_moderator'] = 'Modérateur';
$txt['permitgroups_maintenance'] = 'Maintenance';
$txt['permitgroups_inherit'] = 'Acquérir';

$txt['confirm_delete_attachments_all'] = 'Êtes-vous sûr de vouloir supprimer tous les fichiers joints ?';
$txt['confirm_delete_attachments'] = 'Êtes-vous sûr de vouloir supprimer les fichiers joints sélectionnés ?';
$txt['attachment_manager_browse_files'] = 'Parcourir les fichiers';
$txt['attachment_manager_repair'] = 'Maintenance';
$txt['attachment_manager_avatars'] = 'Avatars';
$txt['attachment_manager_attachments'] = 'Fichiers joints';
$txt['attachment_manager_thumbs'] = 'Vignettes';
$txt['attachment_manager_last_active'] = 'Dernière connexion';
$txt['attachment_manager_member'] = 'Membre';
$txt['attachment_manager_avatars_older'] = 'Supprimer les avatars des membres inactifs depuis plus de';
$txt['attachment_manager_total_avatars'] = 'Avatars au total';

$txt['attachment_manager_avatars_no_entries'] = 'Aucun avatar pour le moment.';
$txt['attachment_manager_attachments_no_entries'] = 'Aucune pièce jointe pour le moment.';
$txt['attachment_manager_thumbs_no_entries'] = 'Aucune vignette pour le moment.';

$txt['attachment_manager_settings'] = 'Paramètres des Fichiers joints';
$txt['attachment_manager_avatar_settings'] = 'Paramètres des Avatars';
$txt['attachment_manager_browse'] = 'Voir les fichiers';
$txt['attachment_manager_maintenance'] = 'Maintenance des Fichiers';
$txt['attachment_manager_save'] = 'Sauvegarder';

$txt['attachmentEnable'] = 'Mode Fichiers joints';
$txt['attachmentEnable_deactivate'] = 'Désactiver les fichiers joints';
$txt['attachmentEnable_enable_all'] = 'Activer tous les fichiers joints';
$txt['attachmentEnable_disable_new'] = 'Désactiver les nouveaux fichiers joints';
$txt['attachmentCheckExtensions'] = 'Vérifier l\'extension des fichiers joints';
$txt['attachmentExtensions'] = 'Extensions autorisées';
$txt['attachmentRecodeLineEndings'] = 'Recoder les fins de ligne dans les fichiers joints au format texte';
$txt['attachmentShowImages'] = 'Afficher les images jointes sous les messages';
$txt['attachmentEncryptFilenames'] = 'Encrypter les noms des fichiers stockés';
$txt['attachmentUploadDir'] = 'Répertoire des fichiers joints<dfn><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Configurer plusieurs répertoires pour fichiers joints]</a></dfn>';
$txt['attachmentUploadDir_multiple'] = 'Répertoire des fichiers joints';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Configurer plusieurs répertoires pour fichiers joints]</a>';
$txt['attachmentDirSizeLimit'] = 'Taille maximale du répertoire des fichiers joints<dfn>(0 pour pas de limite)</dfn>';
$txt['attachmentPostLimit'] = 'Taille totale maximale des fichiers joints par message<dfn>(0 pour pas de limite)</dfn>';
$txt['attachmentSizeLimit'] = 'Taille maximale de chaque fichier joint<dfn>(0 pour pas de limite)</dfn>';
$txt['attachmentNumPerPostLimit'] = 'Nombre maximum de fichiers joints par message<dfn>(0 pour pas de limite)</dfn>';
$txt['attachment_image_reencode'] = 'Réencoder les images potentiellement dangereuses envoyées en fichier joint';
$txt['attachment_image_paranoid_warning'] = 'Attention, la fonctionnalité ci-dessus peut donner lieu à des faux positifs (fichiers sains rejetés).';
$txt['attachment_image_paranoid'] = 'Effectuer un maximum de tests de sécurité sur les images envoyées en fichier joint';
$txt['attachmentThumbnails'] = 'Montrer les images jointes sous forme de vignettes sous les messages';
$txt['attachment_thumb_png'] = 'Sauvegarder les vignettes au format PNG';
$txt['attachmentThumbWidth'] = 'Largeur maximale des vignettes';
$txt['attachmentThumbHeight'] = 'Hauteur maximale des vignettes';

$txt['attach_dir_does_not_exist'] = 'N\'existe pas';
$txt['attach_dir_not_writable'] = 'Non Inscriptible';
$txt['attach_dir_files_missing'] = 'Fichiers Manquants (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Réparer</a>)';
$txt['attach_dir_unused'] = 'Inutilisé';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = 'Gérer les Chemins des Fichiers joints';
$txt['attach_paths'] = 'Chemins des Fichiers joints';
$txt['attach_current_dir'] = 'Répertoire Actuel';
$txt['attach_path'] = 'Chemin';
$txt['attach_current_size'] = 'Taille Actuelle (Ko)';
$txt['attach_num_files'] = 'Fichiers';
$txt['attach_dir_status'] = 'Statut';
$txt['attach_add_path'] = 'Ajouter un Chemin';
$txt['attach_path_current_bad'] = 'Chemin actuel des fichiers joints invalide.';

$txt['mods_cat_avatars'] = 'Avatars';
$txt['avatar_directory'] = 'Répertoire des avatars';
$txt['avatar_url'] = 'URL des avatars';
$txt['avatar_dimension_note'] = '(0 = aucune limite)';
$txt['avatar_max_width_external'] = 'Largeur maximale d\'un avatar externe';
$txt['avatar_max_height_external'] = 'Hauteur maximale d\'un avatar externe';
$txt['avatar_action_too_large'] = 'Si un avatar est trop grand&hellip;';
$txt['option_refuse'] = 'le refuser';
$txt['option_html_resize'] = 'effectuer un redimensionnement HTML';
$txt['option_js_resize'] = 'le redimensionner avec JavaScript';
$txt['option_download_and_resize'] = 'le télécharger et le redimensionner';
$txt['avatar_max_width_upload'] = 'Largeur maximale d\'un avatar transféré';
$txt['avatar_max_height_upload'] = 'Hauteur maximale d\'un avatar transféré';
$txt['avatar_resize_upload'] = 'Redimensionner les avatars trop grands';
$txt['avatar_download_png'] = 'Utiliser le format PNG pour les avatars redimensionnés';
$txt['avatar_external'] = 'Avatars externes';
$txt['avatar_upload'] = 'Avatars transférables';
$txt['avatar_server_stored'] = 'Avatars stockés sur le serveur';
$txt['avatar_server_stored_groups'] = 'Les Groupes de membres sont autorisés à sélectionner une serveur de stockage d\'avatars';
$txt['avatar_upload_groups'] = 'Les Groupes de membres sont autorisés à transférer leur propre avatar sur le serveur';
$txt['avatar_external_url_groups'] = 'Groupes de membres autorisés à sélectionner des avatars externes';
$txt['gravatar_settings'] = 'Gravatars (Avatars multi-sites, gravatar.com)';
$txt['gravatarEnabled'] = 'Autoriser les utilisateurs à utiliser des Gravatars&nbsp;?';
$txt['gravatarOverride'] = 'Forcer l\'utilisation des Gravatars à la place des avatars&nbsp;?';
$txt['gravatarAllowExtraEmail'] = 'Permettre de fournir une autre adresse e-mail pour son Gravatar&nbsp;?';
$txt['gravatarMaxRating'] = 'Classification maximale autorisée&nbsp;?';
$txt['gravatar_maxG'] = 'G (Tous publics)';
$txt['gravatar_maxPG'] = 'PG (À la discrétion des parents)';
$txt['gravatar_maxR'] = 'R (Public mature)';
$txt['gravatar_maxX'] = 'X (Explicite)';
$txt['avatar_defaults'] = 'Avatars par défaut';
$txt['avatar_select_permission'] = 'Sélectionner les permissions pour chaque groupe';
$txt['avatar_download_external'] = 'Télécharger l\'avatar à l\'URL donnée';
$txt['custom_avatar_enabled'] = 'Transférer les avatars dans&hellip;';
$txt['option_attachment_dir'] = 'le répertoire des fichiers joints';
$txt['option_specified_dir'] = 'un répertoire spécifique&hellip;';
$txt['custom_avatar_dir'] = 'Répertoire de stockage';
$txt['custom_avatar_dir_desc'] = 'Evitez d\'utiliser le répertoire où se situent les avatars fournis par défaut par Wedge.';
$txt['custom_avatar_url'] = 'URL des avatars stockés';
$txt['custom_avatar_check_empty'] = 'Le répertoire de stockage des avatars transférés que vous avez spécifié semble être vide ou invalide. Merci de vérifier vos paramètres.';
$txt['avatar_reencode'] = 'Réencoder les avatars potentiellement dangereux';
$txt['avatar_paranoid_warning'] = 'Attention, la fonctionnalité ci-dessus peut donner lieu à des faux positifs (avatars sains rejetés).';
$txt['avatar_paranoid'] = 'Effectuer un maximum de tests de sécurité sur les avatars envoyés';
$txt['avatar_banned_hide'] = 'Cacher l\'avatar des utilisateurs bannis';

$txt['repair_attachments'] = 'Maintenance des Fichiers joints';
$txt['repair_attachments_complete'] = 'Maintenance complétée';
$txt['repair_attachments_complete_desc'] = 'Toutes les erreurs sélectionnées ont maintenant été corrigées';
$txt['repair_attachments_no_errors'] = 'Aucune erreur n\'a été trouvée&nbsp;!';
$txt['repair_attachments_error_desc'] = 'Les erreurs suivantes ont été rencontrées durant la maintenance. Cochez la boîte accompagnant les erreurs que vous souhaitez corriger et cliquez sur Continuer.';
$txt['repair_attachments_continue'] = 'Continuer';
$txt['repair_attachments_cancel'] = 'Annuler';
$txt['attach_repair_missing_thumbnail_parent'] = '%1$d vignettes où manquent un fichier parent';
$txt['attach_repair_parent_missing_thumbnail'] = '%1$d fichiers parents sont notés comme ayant une vignette mais n\'en ont pas';
$txt['attach_repair_file_missing_on_disk'] = '%1$d fichiers/avatars ont une entrée mais n\'existent plus sur le disque';
$txt['attach_repair_file_wrong_size'] = '%1$d fichiers/avatars sont rapportés comme possédant une mauvaise taille de fichier';
$txt['attach_repair_file_size_of_zero'] = '%1$d fichiers/avatars ont une taille de zéro octet sur le disque. (Ils seront supprimés.)';
$txt['attach_repair_attachment_no_msg'] = '%1$d fichiers n\'ont plus de message auquel ils sont associés';
$txt['attach_repair_avatar_no_member'] = '%1$d avatars n\'ont plus de membre auquel ils sont associés';
$txt['attach_repair_wrong_folder'] = '%1$d fichiers joints sont dans le mauvais dossier';

$txt['news_title'] = 'Nouvelles et infolettres';
$txt['news_settings_desc'] = 'Ici vous pouvez changer les options et permissions relatives aux nouvelles et aux infolettres.';
$txt['news_settings_submit'] = 'Enregistrer';
$txt['news_mailing_desc'] = 'Depuis ce menu vous pouvez envoyer des messages à tous les membres qui se sont inscrits et ont spécifié leur adresse e-mail. Vous pouvez modifier la liste de distribution, ou envoyer un message à tous. Utile pour informer des mises à jour et nouvelles importantes.';
$txt['groups_edit_news'] = 'Groupes autorisés à modifier les nouvelles';
$txt['groups_send_mail'] = 'Groupes autorisés à envoyer les infolettres du forum';
$txt['xmlnews_enable'] = 'Activer les flux Atom';
$txt['xmlnews_maxlen'] = 'Longueur maximale d\'un message&nbsp;:<dfn>(0 pour désactiver, mauvaise idée.)</dfn>';
$txt['editnews_clickadd'] = 'Cliquez ici pour ajouter un item.';
$txt['editnews_remove_selected'] = 'Supprimer la sélection';
$txt['editnews_remove_confirm'] = 'Voulez-vous vraiment supprimer les nouvelles sélectionnées ?';
$txt['censor_clickadd'] = 'Cliquez ici pour ajouter un autre mot.';

$txt['layout_controls'] = 'Forum';
$txt['logs'] = 'Journaux';
$txt['generate_reports'] = 'Rapports Détaillés';

$txt['update_available'] = 'Mise à jour disponible&nbsp;!';
$txt['update_message'] = 'Vous utilisez une version périmée de Wedge, qui contient quelques bugs qui ont pu être corrigés depuis la dernière révision.
	Il est très fortement conseillé de <a href="" id="update-link">mettre à jour votre forum</a> à la dernière révision stable le plus rapidement possible. Cela ne prendra qu\'une minute&nbsp;!';

$txt['manageposts'] = 'Messages et sujets';
$txt['manageposts_title'] = 'Gérer les messages et les sujets';
$txt['manageposts_description'] = 'Ici vous pouvez gérer toutes les options relatives aux sujets et aux messages.';

$txt['manageposts_seconds'] = 'secondes';
$txt['manageposts_minutes'] = 'minutes';
$txt['manageposts_characters'] = 'caractères';
$txt['manageposts_days'] = 'jours';
$txt['manageposts_posts'] = 'messages';
$txt['manageposts_topics'] = 'Sujets';

$txt['manageposts_settings'] = 'Paramètres des Messages';
$txt['manageposts_settings_description'] = 'Ici vous pouvez paramétrer tout ce qui est relatif aux messages et à leur envoi.';
$txt['manageposts_settings_submit'] = 'Enregistrer';

$txt['manageposts_bbc_settings'] = 'Table des balises BBcode';
$txt['manageposts_bbc_settings_description'] = 'Les balises BBCodes (Bulletin Board Code) sont inspirées du langage HTML. Elles peuvent être utilisés pour ajouter des mises en forme à vos messages. Par exemple, pour mettre de la force sur le mot \'maison\', vous pouvez taper [b]maison[/b]. Tous les BBCodes sont entourés de crochets (\'[\' et \']\').';
$txt['manageposts_bbc_settings_title'] = 'Paramètres des BBCodes';
$txt['manageposts_bbc_settings_submit'] = 'Enregistrer';

$txt['manageposts_topic_settings'] = 'Paramètres des Sujets';
$txt['manageposts_topic_settings_description'] = 'Ici vous pouvez paramétrer toutes les options en rapport avec les sujets.';
$txt['manageposts_topic_settings_submit'] = 'Enregistrer';

$txt['manageposts_draft_settings'] = 'Brouillons';
$txt['manageposts_draft_settings_description'] = 'Ici, vous pouvez choisir vos préférences concernant les brouillons de messages.';
$txt['manageposts_draft_settings_submit'] = 'Enregistrer';

$txt['manageposts_merge'] = 'Doublons';

$txt['removeNestedQuotes'] = 'Supprimer les citations imbriquées en citant un message';
$txt['enableEmbeddedFlash'] = 'Inclure des animations Flash dans les messages';
$txt['enableEmbeddedFlash_warning'] = 'Peut constituer un risque de sécurité&nbsp;!';
$txt['enableSpellChecking'] = 'Activer le correcteur orthographique';
$txt['enableSpellChecking_warning'] = 'Ceci ne fonctionne pas sur tous les serveurs&nbsp;!';
$txt['disable_wysiwyg'] = 'Désactiver l\'éditeur WYSIWYG';
$txt['max_messageLength'] = 'Longueur maximale des messages';
$txt['max_messageLength_zero'] = '0 pour aucun max.';
$txt['fixLongWords'] = 'Diviser les mots ayant plus de...';
$txt['fixLongWords_zero'] = '0 pour désactiver.';
$txt['fixLongWords_warning'] = 'Ne marche pas sur tous les serveurs&nbsp;!';
$txt['topicSummaryPosts'] = 'Nombre de messages à afficher dans le résumé de la discussion';
$txt['spamWaitTime'] = 'Temps d\'attente requis entre deux envois en provenance d\'une même adresse IP';
$txt['edit_wait_time'] = 'Période de révision';
$txt['edit_disable_time'] = 'Temps maximum après l\'envoi pour modifier un message';
$txt['edit_disable_time_zero'] = '0 pour désactiver';
$txt['max_image_width'] = 'Largeur max. des images postées (0 pour désactiver)';
$txt['max_image_height'] = 'Hauteur max. des images postées (0 pour désactiver)';

$txt['enableBBC'] = 'Activer les BBCodes';
$txt['enablePostHTML'] = 'Permettre l\'utilisation de balises HTML <em>basiques</em> dans les messages';
$txt['autoLinkUrls'] = 'Reconnaissance automatique des URLs';
$txt['disabledBBC'] = 'Balises BBCode autorisées';
$txt['bbcTagsToUse'] = 'Balises BBCodes activées';
$txt['bbcTagsToUse_select'] = 'Sélectionnez toutes les balises pouvant être utilisées';
$txt['bbcTagsToUse_select_all'] = 'Sélectionner toutes les balises';

$txt['enableParticipation'] = 'Activer l\'icône de participation';
$txt['oldTopicDays'] = 'Temps avant qu\'un sujet ne soit mentionné comme ancien lors de l\'écriture d\'une réponse';
$txt['oldTopicDays_zero'] = '0 pour désactiver';
$txt['defaultMaxTopics'] = 'Nombre de sujets par page lors du visionnage d\'un site';
$txt['defaultMaxMessages'] = 'Nombre de messages à afficher lors du visionnage d\'un sujet';
$txt['enableAllMessages'] = 'Taille maximale d\'un sujet pour afficher &quot;Tous&quot; les messages';
$txt['enableAllMessages_zero'] = '0 pour ne jamais afficher &quot;Tous&quot;';
$txt['disableCustomPerPage'] = 'Empêcher les utilisateurs de changer le nombre de sujets/messages par page';
$txt['enablePreviousNext'] = 'Activer les liens &quot;Sujet précédent/suivant&quot;';

$txt['ignoreMoveVsNew'] = 'Par défaut, permettre n\'importe quelle section de destination pour déplacer les sujets';

$txt['masterSavePostDrafts'] = 'Activer les brouillons';
$txt['masterAutoSavePostDrafts'] = 'Activer la sauvegarde automatique des brouillons';
$txt['masterSavePmDrafts'] = 'Activer les brouillons dans la messagerie';
$txt['masterAutoSavePmDrafts'] = 'Activer la sauvegarde automatique des brouillons de messagerie';
$txt['draftsave_subnote'] = 'Veuillez noter que l\'utilisateur aura en plus besoin d\'avoir la permission correspondante activée pour son groupe.';
$txt['draftautosave_subnote'] = 'Cela ne remplace pas l\'option ci-dessus mais étend simplement son champ. De plus, l\'utilisateur doit avoir la permission associée.';
$txt['masterAutoSaveDraftsDelay'] = 'À quelle fréquence sauvegarder les brouillons automatiquement&nbsp;?';
$txt['pruneSaveDrafts'] = 'Purger les brouillons après combien de jours&nbsp;?';

$txt['not_done_title'] = 'Pas encore effectué&nbsp;!';
$txt['not_done_reason'] = 'Afin d\'éviter la surcharge de votre serveur, le processus a été interrompu temporairement. Il devrait reprendre automatiquement dans quelques secondes. S\'il ne reprend pas, veuillez cliquer sur le lien &quot;Continuer&quot; ci-dessous.';
$txt['not_done_continue'] = 'Continuer';

$txt['general_settings'] = 'Paramètres';
$txt['database_paths_settings'] = 'Base de données et Chemins';
$txt['cookies_sessions_settings'] = 'Cookies et Sessions';
$txt['caching_settings'] = 'Configuration du Cache';
$txt['load_balancing_settings'] = 'Répartition de Charge';
$txt['proxy_settings'] = 'Paramètres Proxy';

$txt['language_configuration'] = 'Langues';
$txt['language_description'] = 'Cette section vous permet de modifier les langues installées sur votre forum, et d\'en télécharger de nouvelles sur le site web de Wedge. Vous pouvez également modifier les paramètres liés aux langues ici.';
$txt['language_edit'] = 'Modifier Langues';
$txt['language_add'] = 'Ajouter Langue';
$txt['language_settings'] = 'Paramètres';

$txt['advanced'] = 'Avancé';
$txt['simple'] = 'Simple';

$txt['admin_news_select_recipients'] = 'Veuillez sélectionner qui doit recevoir une copie de l\'infolettre.';
$txt['admin_news_select_group'] = 'Groupes de Membres';
$txt['admin_news_select_group_desc'] = 'Sélectionnez les groupes qui doivent recevoir cette infolettre.';
$txt['admin_news_select_members'] = 'Membres';
$txt['admin_news_select_members_desc'] = 'Membres supplémentaires qui doivent recevoir l\'infolettre.';
$txt['admin_news_select_excluded_members'] = 'Membres Exclus';
$txt['admin_news_select_excluded_members_desc'] = 'Membres ne devant pas recevoir d\'infolettre.';
$txt['admin_news_select_excluded_groups'] = 'Groupes Exclus';
$txt['admin_news_select_excluded_groups_desc'] = 'Sélectionnez les groupes ne devant absolument pas recevoir l\'infolettre.';
$txt['admin_news_select_email'] = 'Adresses e-mail';
$txt['admin_news_select_email_desc'] = 'Une liste d\'adresses e-mail séparées par des points-virgules, à laquelle sera envoyée l\'infolettre. (Par ex: adresse1; adresse2)';
$txt['admin_news_select_override_notify'] = 'Outrepasser les Paramètres de Notification existants';
$txt['admin_news_cannot_pm_emails_js'] = 'Vous ne pouvez pas envoyer de message personnel à une adresse e-mail. Si vous continuez, toutes les adresses e-mail seront ignorées.\\n\\nÊtes-vous sûr de vouloir faire cela ?';

$txt['mailqueue_browse'] = 'Parcourir la file d\'attente';
$txt['mailqueue_settings'] = 'Paramètres';

$txt['admin_search'] = 'Recherche Rapide';
$txt['admin_search_type_internal'] = 'Tâche/Option';
$txt['admin_search_type_member'] = 'Membre';
$txt['admin_search_go'] = 'Aller';
$txt['admin_search_results'] = 'Résultats Recherche';
$txt['admin_search_results_desc'] = 'Résultats de la recherche&nbsp;: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Rechercher à nouveau';
$txt['admin_search_results_none'] = 'Aucun résultat&nbsp;!';
$txt['admin_search_welcome'] = 'Bienvenue dans le panneau d\'administration de Wedge. Vous pouvez accéder aux pages d\'options via le menu ci-dessus, ou par les raccourcis ci-dessous. Si vous vous perdez, essayez de taper à droite un mot ou deux de la fonctionnalité que vous cherchez.';

$txt['admin_search_section_sections'] = 'Site';
$txt['admin_search_section_settings'] = 'Paramètres';

$txt['core_settings_title'] = 'Fonctionnalités de base';
$txt['mods_cat_features'] = 'Paramètres';
$txt['mods_cat_security_general'] = 'Paramètres';
$txt['antispam_title'] = 'Anti-Spam';
$txt['mods_cat_modifications_misc'] = 'Diverses';
$txt['mods_cat_layout'] = 'Apparence';
$txt['moderation_settings_short'] = 'Modération';
$txt['member_options_title'] = 'Options des Membres';
$txt['signature_settings_short'] = 'Signatures';
$txt['custom_profile_shorttitle'] = 'Champs de Profil';

$txt['boardsEdit'] = 'Modifier mes Sites';
$txt['mboards_new_cat'] = 'Créer une nouvelle catégorie';
$txt['manage_holidays'] = 'Gérer les jours fériés';
$txt['calendar_settings'] = 'Paramètres';
$txt['search_weights'] = 'Poids';
$txt['search_method'] = 'Méthode de recherche';

$txt['smiley_sets'] = 'Jeux de smileys';
$txt['smileys_add'] = 'Ajouter un smiley';
$txt['smileys_edit'] = 'Modifier les smileys';
$txt['smileys_set_order'] = 'Choisir l\'ordre des smileys';
$txt['icons_edit_message_icons'] = 'Modifier les Icônes de Message';

$txt['membergroups_new_group'] = 'Ajouter un Groupe de membres';
$txt['membergroups_edit_groups'] = 'Modifier les Groupes de membres';
$txt['permissions_groups'] = 'Permissions par Groupe de membres';
$txt['permissions_boards'] = 'Permissions par Site';
$txt['permissions_profiles'] = 'Modifier les Profils';
$txt['permissions_post_moderation'] = 'Modération des messages';

$txt['browse_packages'] = 'Parcourir les Extensions';
$txt['download_packages'] = 'Télécharger des Extensions';
$txt['package_file_perms'] = 'Permissions des Fichiers';
$txt['package_settings'] = 'Paramètres';
$txt['themeadmin_admin_title'] = 'Gérer et Installer';
$txt['themeadmin_list_title'] = 'Paramètres des Thèmes';
$txt['themeadmin_reset_title'] = 'Options des Membres';
$txt['themeadmin_edit_title'] = 'Modifier les Thèmes';
$txt['admin_browse_register_new'] = 'Inscrire un nouveau membre';
$txt['configure_options'] = 'Configurer les Options';

$txt['search_engines'] = 'Moteurs de Recherche';
$txt['spiders'] = 'Robots';
$txt['spider_stats'] = 'Stats';

$txt['paid_subscriptions'] = 'Abonnements payants';
$txt['paid_subs_view'] = 'Voir les Abonnements';

$txt['max_urlLength'] = 'Dans les messages, raccourcir les adresses de plus de...<dfn>Par défaut, 50 caractères. Mettez à 0 pour désactiver.</dfn>';

$txt['allow_ignore_topics'] = 'Permettre aux membres d\'ignorer des sujets';

// Fusion des doublons
$txt['merge_post_header'] = 'Fusion des doublons';
$txt['merge_post_auto'] = 'Fusionner les doublons automatiquement<dfn>Dans un sujet, deux messages successifs d\'un même auteur sont considérés comme des doublons.</dfn>';
$txt['merge_post_auto_time'] = 'Temps maximum entre deux messages pour qu\'ils soient fusionnés automatiquement.<dfn>(mettez 0 pour toujours fusionner)</dfn>';
$txt['merge_post_admin_double_post'] = 'Fusionner les doublons des admins';
$txt['merge_post_no_time'] = 'Ne pas indiquer l\'ancienne date avant le séparateur';
$txt['merge_post_no_sep'] = 'Ne montrer ni le séparateur ni l\'ancienne date';
$txt['merge_post_ignore_length'] = 'Ignorer la longueur maximale des messages';
$txt['merge_post_separator'] = 'Séparateur entre les messages fusionnés (activez l\'option ci-dessus)<dfn>Vous pouvez utiliser du code BBC. Pour la date de l\'ancien post, utilisez la variable <strong>$date</strong> dans le champ texte.<br>Exemple : [size=1]$date[/size][hr][br] (version par défaut)</dfn>';
$txt['merge_post_custom_separator'] = 'Utiliser son propre séparateur pour distinguer les messages fusionnés.<dfn>Les options au-dessus seront désactivées.</dfn>';

// Pretty URLs
$txt['pretty_urls'] = 'Adresses embellies';
$txt['pretty_urls_desc'] = 'Les Adresses embellies (Pretty URLs) vous permettent de remplacer les longues adresses toutes moches, par de longues adresses toutes jolies, et optimisées pour les moteurs de recherche. Vous pouvez les activer ici, filtre par filtre, mais aussi vider le cache.';

$txt['pretty'] = array(
	'url' => 'Adresse embellie',
	'url_desc' => 'L\'adresse URL utilisée pour votre site.<br>N\'utilisez que l\'alphabet, les chiffres et le tiret (-). Laissez-le vide pour essayer d\'utiliser le nom ci-dessus. <strong>Une fois que votre site propose du contenu, évitez autant que possible de changer son URL !</strong>',
);

$txt['pretty_settings'] = 'Réécriture des Adresses';
$txt['pretty_maintenance'] = 'Maintenance';

$txt['admin_pretty_urls'] = 'Administration des Adresses embellies';
$txt['pretty_refill'] = 'Repeupler la liste des sujets';
$txt['pretty_cache'] = 'Activer le cache secondaire<div class="pretty_filter">(Légèrement plus rapide, mais plus gourmand dans la base de données)</div>';
$txt['pretty_save'] = 'Sauvegarder les changements';
$txt['pretty_converted'] = 'Tous les titres de sujets ont été convertis !';
$txt['pretty_duplicateboard'] = 'Cette adresse est déjà prise. Choisissez-en une autre.';
$txt['pretty_filter_boards'] = 'Réécrire les Adresses des Sections<div class="pretty_filter">http://votresite.com/index.php?board=1 &rarr; http://votresite.com/nom-du-quartier/</div>';
$txt['pretty_filter_topics'] = 'Réécrire les Adresses des Sujets<div class="pretty_filter">http://votresite.com/index.php?topic=1.0 &rarr; http://votresite.com/nom-du-quartier/nom-du-sujet/</div>';
$txt['pretty_filter_actions'] = 'Réécrire les Adresses des Actions<div class="pretty_filter">http://votresite.com/index.php?action=hello &rarr; http://votresite.com/hello/</div>';
$txt['pretty_filter_profiles'] = 'Réécrire les Adresses des Profils<div class="pretty_filter">http://votresite.com/index.php?action=profile;u=1 &rarr; http://votresite.com/~nom-du-membre/<br>L\'adresse utilisera l\'identifiant de connexion de l\'utilisateur et non pas son nom affiché. Assurez-vous que cela ne dérange pas vos utilisateurs.</div>';

// Media Gallery
$txt['media_title'] = 'Media';
$txt['media_admin_labels_index'] = 'Accueil';
$txt['media_admin_labels_settings'] = 'Paramètres';
$txt['media_admin_labels_embed'] = 'Intégration';
$txt['media_admin_labels_reports'] = 'Signalements';
$txt['media_admin_labels_submissions'] = 'Soumissions';
$txt['media_admin_labels_bans'] = 'Bannissements';
$txt['media_admin_labels_albums'] = 'Albums';
$txt['media_admin_labels_maintenance'] = 'Maintenance Media';
$txt['media_admin_labels_about'] = 'À propos';
$txt['media_admin_labels_ftp'] = 'Import par FTP';
$txt['media_admin_labels_perms'] = 'Permissions';
$txt['media_admin_labels_quotas'] = 'Quotas';
$txt['media_admin_settings_config'] = 'Configuration';
$txt['media_admin_settings_sites'] = 'Liste des sites';
$txt['media_admin_readme'] = 'Lisez-Moi';
$txt['media_admin_changelog'] = 'Changelog';
$txt['media_admin_settings_meta'] = 'Métadonnées';
$txt['media_admin_settings_layout'] = 'Apparence';
$txt['media_admin_add_album'] = 'Créer un Album';
$txt['media_admin_filter_normal_albums'] = 'Filtrer les albums normaux';
$txt['media_admin_filter_featured_albums'] = 'Filtrer les albums stars';
$txt['media_admin_maintenance_tasks'] = 'Tâches de maintenance';
$txt['media_admin_maintenance_utils'] = 'Utilitaires de maintenance';
$txt['media_admin_maintenance_regen'] = 'Régénération des vignettes et aperçus';
$txt['media_admin_maintenance_all_tasks'] = 'Toutes les tâches';
$txt['media_admin_maintenance_recount'] = 'Recompter les totaux';
$txt['media_admin_maintenance_finderrors'] = 'Recherche d\'erreurs';
$txt['media_admin_maintenance_prune'] = 'Nettoyage';
$txt['media_admin_maintenance_browse'] = 'Parcourir les fichiers';
$txt['media_admin_maintenance_checkfiles'] = 'Éliminer les fichiers superflus';
$txt['media_admin_banning'] = 'Membre à bannir';
$txt['media_admin_bans_add'] = 'Ajouter un bannissement';
$txt['media_cf'] = 'Champs personnels';
$txt['media_cf_add'] = 'Créer un champ';

?>