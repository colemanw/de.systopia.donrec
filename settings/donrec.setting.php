<?php
/*-------------------------------------------------------+
| SYSTOPIA Donation Receipts Extension                   |
| Copyright (C) 2013-2016 SYSTOPIA                       |
| Author: N.Bochan (bochan -at- systopia.de)             |
| http://www.systopia.de/                                |
+--------------------------------------------------------+
| License: AGPLv3, see LICENSE file                      |
+--------------------------------------------------------*/

/*
* Settings metadata file
*/

return array(
  'donrec_enable_line_item' => array(
    'group_name' => 'Donation Receipt Settings',
    'group' => 'de.systopia',
    'name' => 'donrec_enable_line_item',
    'type' => 'Integer',
    'html_type' => 'radio',
    'default' => 1,
    'add' => '4.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Enable line items. Switching this on/off requires testing whether your donation receipts are still working as expected.',
  ),
  'donrec_packet_size' => array(
    'group_name' => 'Donation Receipt Settings',
    'group' => 'de.systopia',
    'name' => 'donrec_packet_size',
    'type' => 'Integer',
    'html_type' => 'Select',
    'default' => 5,
    'add' => '4.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Packet size',
  ),
  'donrec_pdfinfo_path' => array(
    'group_name' => 'Donation Receipt Settings',
    'group' => 'de.systopia',
    'name' => 'donrec_pdfinfo_path',
    'type' => 'String',
    'default' => "/usr/bin/pdfinfo",
    'add' => '4.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'pdfinfo binary path',
  ),
  'donrec_pdfunite_path' => array(
    'group_name' => 'Donation Receipt Settings',
    'group' => 'de.systopia',
    'name' => 'donrec_pdfunite_path',
    'type' => 'String',
    'default' => "/usr/bin/pdfunite",
    'add' => '4.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'pdfunite binary path',
  ),
  'donrec_civioffice_document_uri' => array(
    'group_name' => 'Donation Receipt Settings',
    'group' => 'de.systopia',
    'name' => 'donrec_civioffice_document_uri',
    'type' => 'String',
    'default' => "",
    'add' => '4.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'The URI of the CiviOffice document to use for rendering a cover letter with the PDFCiviOffice exporter.',
  ),
  'donrec_civioffice_document_renderer_uri' => array(
    'group_name' => 'Donation Receipt Settings',
    'group' => 'de.systopia',
    'name' => 'donrec_civioffice_document_renderer_uri',
    'type' => 'String',
    'default' => "",
    'add' => '4.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'The URI of the CiviOffice document renderer to use for rendering a cover letter with the PDFCiviOffice exporter.',
  ),
  'donrec_enable_crypt' => array(
    'group_name' => 'Donation Receipt Settings',
    'group' => 'de.systopia',
    'name' => 'donrec_enable_crypt',
    'type' => 'Integer',
    'default' => "1",
    'add' => '4.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Do you want to enable encrypted pdfs?',
  ),
  'donrec_crypt_command' => array(
    'group_name' => 'Donation Receipt Settings',
    'group' => 'de.systopia',
    'name' => 'donrec_crypt_command',
    'type' => 'String',
    'default' => "pdftk input.pdf output crypt.pdf owner_pw zufallspasswort allow printing screenreaders",
    'add' => '4.3',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'The command line to generate encrypted pdfs',
  ),
 );
