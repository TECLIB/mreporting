<?php
/*
 * @version $Id: HEADER 15930 2011-10-30 15:47:55Z tsmr $
 -------------------------------------------------------------------------
 Mreporting plugin for GLPI
 Copyright (C) 2003-2011 by the mreporting Development Team.

 https://forge.indepnet.net/projects/mreporting
 -------------------------------------------------------------------------

 LICENSE

 This file is part of mreporting.

 mreporting is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 mreporting is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with mreporting. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

$LANG['plugin_mreporting']["name"] = "Plus de rapports";

$LANG['plugin_mreporting']["right"]["manage"] = "Gestion des droits";

$LANG['plugin_mreporting']["error"][0] = "Aucun rapport disponible !";
$LANG['plugin_mreporting']["error"][1] = "Aucune données pour cette plage de date !";
$LANG['plugin_mreporting']["error"][2] = "Non défini";
$LANG['plugin_mreporting']["error"][3] = "aucun graphique sélectionné";
$LANG['plugin_mreporting']["error"][4] = "L'objet existe déjà";

$LANG['plugin_mreporting']["export"][0] = "Rapport général - ODT";
$LANG['plugin_mreporting']["export"][1] = "Nombre";
$LANG['plugin_mreporting']["export"][2] = "Données";
$LANG['plugin_mreporting']["export"][3] = "Sans les données";
$LANG['plugin_mreporting']["export"][4] = "Avec les données";

$LANG['plugin_mreporting']["config"][0] = "Configuration";
$LANG['plugin_mreporting']["config"][1] = "Voir l'aire";
$LANG['plugin_mreporting']["config"][2] = "Incurver les lignes (SVG)";
$LANG['plugin_mreporting']["config"][3] = "Voir les valeurs";
$LANG['plugin_mreporting']["config"][4] = "Inverser le tableau de données";
$LANG['plugin_mreporting']["config"][5] = "Au passage de la souris";
$LANG['plugin_mreporting']["config"][6] = "Toujours";
$LANG['plugin_mreporting']["config"][7] = "Jamais";
$LANG['plugin_mreporting']["config"][8] = "Unité";
$LANG['plugin_mreporting']["config"][9] = "Délai par défaut";
$LANG['plugin_mreporting']["config"][10] = "Initialiser la configuration des graphiques";
$LANG['plugin_mreporting']["config"][11] = "Condition supplémentaire Mysql";
$LANG['plugin_mreporting']["config"][12] = "Voir le graphique";
$LANG['plugin_mreporting']["config"][13] = "Classe";
$LANG['plugin_mreporting']["config"][14] = "Envoyer ce rapport avec les notifications";

$LANG['plugin_mreporting']['parser'][1] = "Utiliser ce modèle";
$LANG['plugin_mreporting']['parser'][2] = "Merci de sélectionner un modèle dans vos préférences";
$LANG['plugin_mreporting']['parser'][3] = "Aucun modèle n'existe";

$LANG['plugin_mreporting']['notification_name']    = 'Notification "plus de rapports"';
$LANG['plugin_mreporting']['notification_creator'] = 'Généré automatiquement par GLPI';
$LANG['plugin_mreporting']['notification_comment'] = '';
$LANG['plugin_mreporting']['notification_subject'] = 'Rapports statistiques de GLPI';
$LANG['plugin_mreporting']['notification_text'] = <<<EOT
Bonjour,

Les rapports de GLPI sont disponibles.
Vous les trouverez en pièce jointe dans cet e-mail.

EOT;

$LANG['plugin_mreporting']['notification_html'] = <<<EOT
<p>Bonjour,</p>

<p>Les rapports de GLPI sont disponibles.<br />
   Vous les trouverez en pièce jointe dans cet e-mail.</p>

EOT;
$LANG['plugin_mreporting']['notification_event']   = "Plus de rapports";
$LANG['plugin_mreporting']['notification_log']     = "Notification(s) envoyée(s) !";

$LANG['plugin_mreporting']['download_reports']     = "Téléchargement des rapports GLPI";
$LANG['plugin_mreporting']['download_in_progress'] = "Le téléchargement de vos rapports est en cours...";
$LANG['plugin_mreporting']['download_dont_start']  = "Si le téléchargement ne démarre pas automatiquement, veuillez";
$LANG['plugin_mreporting']['download_clic_here']   = "cliquer ici";

$LANG['plugin_mreporting']['selector']["status"]   = "Status";
$LANG['plugin_mreporting']['selector']["period"][0] = "Période";
$LANG['plugin_mreporting']['selector']["period"][1] = "Jour";
$LANG['plugin_mreporting']['selector']["period"][2] = "Semaine";
$LANG['plugin_mreporting']['selector']["period"][3] = "Mois";
$LANG['plugin_mreporting']['selector']["period"][4] = "Année";

$LANG['plugin_mreporting']['Helpdesk']['title'] = "Reporting Helpdesk";
$LANG['plugin_mreporting']['Helpdesk']['reportHbarTicketNumberByEntity']['title'] = "Nombre de ticket par entités";
$LANG['plugin_mreporting']['Helpdesk']['reportHbarTicketNumberByEntity']['desc'] = "Barres";
$LANG['plugin_mreporting']['Helpdesk']['reportHbarTicketNumberByEntity']['category'] = "Par entités";

$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketNumberByEntity']['title'] = "Nombre de ticket par entités";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketNumberByEntity']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketNumberByEntity']['category'] = "Par entités";

$LANG['plugin_mreporting']['Helpdesk']['reportHgbarTicketNumberByCatAndEntity']['title'] = "Nombre de ticket par catégories et entités";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarTicketNumberByCatAndEntity']['desc'] = "Barres groupées";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarTicketNumberByCatAndEntity']['category'] = "Par entités";

$LANG['plugin_mreporting']['Helpdesk']['reportPieTopTenAuthor']['title'] = "Top 10 des demandeurs";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTopTenAuthor']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTopTenAuthor']['category'] = "Par demandeurs";

$LANG['plugin_mreporting']['Helpdesk']['reportHgbarOpenTicketNumberByCategoryAndByType']['title'] = "Nombre de tickets ouverts par catégories et par types";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarOpenTicketNumberByCategoryAndByType']['desc'] = "Barres groupées";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarOpenTicketNumberByCategoryAndByType']['category'] = "Par catégories";

$LANG['plugin_mreporting']['Helpdesk']['reportHgbarCloseTicketNumberByCategoryAndByType']['title'] = "Nombre de tickets clôturés par catégories et par types";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarCloseTicketNumberByCategoryAndByType']['desc'] = "Barres groupées";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarCloseTicketNumberByCategoryAndByType']['category'] = "Par catégories";

$LANG['plugin_mreporting']['Helpdesk']['reportHgbarOpenedTicketNumberByCategory']['title'] = "Nombre de tickets ouverts par catégories et par statuts";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarOpenedTicketNumberByCategory']['desc'] = "Barres groupées";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarOpenedTicketNumberByCategory']['category'] = "Par catégories";

$LANG['plugin_mreporting']['Helpdesk']['reportHgbarTicketNumberByService']['title'] = "Nombre de tickets ouverts et clôturés par services";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarTicketNumberByService']['desc'] = "Barres groupées";
$LANG['plugin_mreporting']['Helpdesk']['reportHgbarTicketNumberByService']['category'] = "Par services";

$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketOpenedAndClosed']['title'] = "Nombre de tickets ouverts et clôturés";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketOpenedAndClosed']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketOpenedAndClosed']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketOpenedbyStatus']['title'] = "Nombre de tickets ouverts par statuts";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketOpenedbyStatus']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Helpdesk']['reportPieTicketOpenedbyStatus']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportAreaNbTicket']['title'] = "Evolution du nombre de ticket sur la période";
$LANG['plugin_mreporting']['Helpdesk']['reportAreaNbTicket']['desc'] = "Aire";
$LANG['plugin_mreporting']['Helpdesk']['reportAreaNbTicket']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportLineNbTicket']['title'] = "Evolution du nombre de ticket sur la période";
$LANG['plugin_mreporting']['Helpdesk']['reportLineNbTicket']['desc'] = "Ligne";
$LANG['plugin_mreporting']['Helpdesk']['reportLineNbTicket']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportGlineNbTicket']['title'] = "Evolution du nombre de ticket sur la période (par Statut)";
$LANG['plugin_mreporting']['Helpdesk']['reportGlineNbTicket']['desc'] = "Lignes";
$LANG['plugin_mreporting']['Helpdesk']['reportGlineNbTicket']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportGareaNbTicket']['title'] = "Evolution du nombre de ticket sur la période (par Statut)";
$LANG['plugin_mreporting']['Helpdesk']['reportGareaNbTicket']['desc'] = "Aire";
$LANG['plugin_mreporting']['Helpdesk']['reportGareaNbTicket']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportVstackbarNbTicket']['title'] = "Evolution du nombre de ticket sur la période (par Statut)";
$LANG['plugin_mreporting']['Helpdesk']['reportVstackbarNbTicket']['desc'] = "Barres empilées";
$LANG['plugin_mreporting']['Helpdesk']['reportVstackbarNbTicket']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportSunburstTicketByCategories']['title'] = "Repartition des tickets par catégories et sous catégories";
$LANG['plugin_mreporting']['Helpdesk']['reportSunburstTicketByCategories']['desc'] = "Donut";
$LANG['plugin_mreporting']['Helpdesk']['reportSunburstTicketByCategories']['category'] = "Par catégories";

$LANG['plugin_mreporting']['Helpdesk']['reportVstackbarTicketStatusByTechnician']['title'] = "Nombre de tickets par statuts et technicien";
$LANG['plugin_mreporting']['Helpdesk']['reportVstackbarTicketStatusByTechnician']['desc'] = "Barres empilées";
$LANG['plugin_mreporting']['Helpdesk']['reportVstackbarTicketStatusByTechnician']['category'] = "Par tickets";

$LANG['plugin_mreporting']['Helpdesk']['reportHbarTicketNumberByLocation']['title'] = "Nombre de ticket par lieu des demandeurs";
$LANG['plugin_mreporting']['Helpdesk']['reportHbarTicketNumberByLocation']['desc'] = "Barres";
$LANG['plugin_mreporting']['Helpdesk']['reportHbarTicketNumberByLocation']['category'] = "Par demandeurs";

$LANG['plugin_mreporting']['Inventory']['title'] = "Reporting inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByOS']['title'] = "Ordinateurs par OS";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByOS']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByOS']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByOS']['title'] = "Ordinateurs par OS";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByOS']['desc'] = "Camenbert";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByOS']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByFabricant']['title'] = "Ordinateurs par fabricant";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByFabricant']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByFabricant']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByFabricant']['title'] = "Ordinateurs par fabricant";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByFabricant']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByFabricant']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByType']['title'] = "Ordinateurs par type";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByType']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByType']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByType']['title'] = "Ordinateurs par type";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByType']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByType']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByDomain']['title'] = "Ordinateurs par domaine (mono et multi-domaine)";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByDomain']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByDomain']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarWindows']['title'] = "Répartition des versions de Windows dans le parc";
$LANG['plugin_mreporting']['Inventory']['reportHbarWindows']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarWindows']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarLinux']['title'] = "Répartition des distributions de Linux dans le parc";
$LANG['plugin_mreporting']['Inventory']['reportHbarLinux']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarLinux']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByAge']['title'] = "Ordinateurs par &acirc;ge";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByAge']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByAge']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByAge']['title'] = "Ordinateurs par &acirc;ge";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByAge']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByAge']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarFusionInventory']['title'] = "Répartition version agent FusionInventory";
$LANG['plugin_mreporting']['Inventory']['reportHbarFusionInventory']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarFusionInventory']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportPieFusionInventory']['title'] = "Répartition version agent FusionInventory";
$LANG['plugin_mreporting']['Inventory']['reportPieFusionInventory']['desc'] = "Camembert";
$LANG['plugin_mreporting']['Inventory']['reportPieFusionInventory']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Inventory']['reportHbarMonitors']['title'] = "Répartition du nombre d'écrans par ordinateur";
$LANG['plugin_mreporting']['Inventory']['reportHbarMonitors']['desc'] = "Barres";
$LANG['plugin_mreporting']['Inventory']['reportHbarMonitors']['category'] = "Inventaire";

$LANG['plugin_mreporting']['Helpdeskplus']['title'] = 'Reporting Helpdesk Avancé';

$LANG['plugin_mreporting']['Helpdeskplus']['reportGlineBacklogs']['title']            = 'Backlog';
$LANG['plugin_mreporting']['Helpdeskplus']['reportGlineBacklogs']['desc']             = 'Ce rapport affiche le nombre de ticket groupé par la période selectionnée (jour, semaine, ...).<br> Il ajoute par ailleurs une nouvelle ligne nommée "Backlogs" permettant de visualiser <i>l\'en cours</i> des tickets à une date donnée';

$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarLifetime']['title']        = 'Gestion de l\'ancienneté';
$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarLifetime']['desc']         = 'Ce rapport affiche des barres indiquant le nombre de tickets pour la période selectionnée (jour, semaine, ...).<br>
Les tickets sont affichés dans leurs statuts courants. Par exemple, les blocs \'Nouveau\' affiche les tickets dans un statut nouveau à la date d\'aujourd\'hui.';

$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarTicketsgroups']['title']   = 'Gestion du quantitatif par groupes';
$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarTicketsgroups']['desc']    = 'Ce rapport affiche le nombre de tickets ouverts entre les dates selectionnées par leur groupe d\'attribution';

$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarTicketstech']['title']     = 'Gestion du quantitatif par technicien';
$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarTicketstech']['desc']      = 'Ce rapport affiche le nombre de tickets ouverts entre les dates selectionnées groupés par techniciens.<br>
<b>Vous devez selectionner au préalable un groupe de technicien pour afficher les données.</b>';

$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarWorkflow']['title']        = 'Orientation des files';
$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarWorkflow']['desc']         = 'Nombre de tickets pour chaque groupe d\'arrivée en fonction d\'un groupe de départ.<br />
                                                                                       - Sélectionnez un groupe demandeur pour afficher le nombre de ticket pour les groupes attribués.<br />
                                                                                       - Sélectionnez un groupe chargé du ticket pour afficher le nombre de ticket pour les groupes demandeurs.<br />
                                                                                       <b>Vous ne pouvez sélectionner qu\'un critère à la fois !</b>';

$LANG['plugin_mreporting']['Helpdeskplus']['reportHbarTopcategory']['title']          = 'TOP catégories';
$LANG['plugin_mreporting']['Helpdeskplus']['reportHbarTopcategory']['desc']           = 'Nombre croissant de ticket affiché par catégorie. <br>
Il est possible limiter le nombre de catégories affichées !';

$LANG['plugin_mreporting']['Helpdeskplus']['reportHbarTopapplicant']['title']         = 'TOP groupes demandeurs';
$LANG['plugin_mreporting']['Helpdeskplus']['reportHbarTopapplicant']['desc']          = 'Nombre croissant de ticket affiché par groupe demandeur. <br>
Il est possible limiter le nombre de groupes affichés !';

$LANG['plugin_mreporting']['Helpdeskplus']['backlogs']        = 'Backlogs';
$LANG['plugin_mreporting']['Helpdeskplus']['period']          = 'Période';
$LANG['plugin_mreporting']['Helpdeskplus']['backlogstatus']   = 'Status à afficher';


$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarGroupChange']['title'] = "Nombre de changement de groupe";
$LANG['plugin_mreporting']['Helpdeskplus']['reportVstackbarGroupChange']['desc'] = "Le graphique suivant affiche les nombres de tickets classé par nombre de changements.<br>
En ordonnée est affiché le nombre de ticket.<br>
En abscisse, le nombre de changements.";

$LANG['plugin_mreporting']['Other']['title'] = "Autres";
$LANG['plugin_mreporting']['Other']['reportHbarLogs']['title'] = "Répartition des logs";
$LANG['plugin_mreporting']['Other']['reportHbarLogs']['desc'] = "Barres";
$LANG['plugin_mreporting']['Other']['reportHbarLogs']['category'] = "Logs";
