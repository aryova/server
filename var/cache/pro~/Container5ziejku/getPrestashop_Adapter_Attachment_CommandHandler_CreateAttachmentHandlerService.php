<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.attachment.command_handler.create_attachment_handler' shared service.

return $this->services['prestashop.adapter.attachment.command_handler.create_attachment_handler'] = new \PrestaShop\PrestaShop\Adapter\Attachment\CommandHandler\AddAttachmentHandler(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.attachment.uploader.attachment_file_uploader']) ? $this->services['prestashop.adapter.attachment.uploader.attachment_file_uploader'] : $this->load('getPrestashop_Adapter_Attachment_Uploader_AttachmentFileUploaderService.php')) && false ?: '_'});
