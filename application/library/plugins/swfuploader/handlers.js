/* Demo Note:  This demo uses a FileProgress class that handles the UI for displaying the file name and percent complete.
The FileProgress class is not part of SWFUpload.
*/


/* **********************
   Event Handlers
   These are my custom event handlers to make my
   web application behave the way I went when SWFUpload
   completes different tasks.  These aren't part of the SWFUpload
   package.  They are part of my application.  Without these none
   of the actions SWFUpload makes will show up in my application.
   ********************** */
function fileQueued(file) {
	try {
		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setStatus("Aguardando...");
		progress.toggleCancel(true, this);

	} catch (ex) {
		this.debug(ex);
	}

}

function fileQueueError(file, errorCode, message) {
	try {
		if (errorCode === SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED) {
			alert("Muitas imagens enfileiradas.\n" + (message === 0 ? "Total de MB excedido." : "Selecione de " + (message > 1 ? " até " + message + " imagens." : "uma imagem.")));
			return;
		}

		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setError();
		progress.toggleCancel(false);

		switch (errorCode) {
		case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
			progress.setStatus("File is too big.");
			this.debug("Código de Erro: Imagem muito grande, Imagem: " + file.name + ", tamanho: " + file.size + ", Mensagem: " + message);
			break;
		case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:
			progress.setStatus("Cannot upload Zero Byte files.");
			this.debug("Código de Erro: Zero byte file, Imagem: " + file.name + ", tamanho: " + file.size + ", Mensagem: " + message);
			break;
		case SWFUpload.QUEUE_ERROR.INVALID_FILETYPE:
			progress.setStatus("Invalid File Type.");
			this.debug("Código de Erro: Invalid File Type, Imagem: " + file.name + ", tamanho: " + file.size + ", Mensagem: " + message);
			break;
		default:
			if (file !== null) {
				progress.setStatus("Unhandled Error");
			}
			this.debug("Código de Erro: " + errorCode + ", Imagem: " + file.name + ", tamanho: " + file.size + ", Mensagem: " + message);
			break;
		}
	} catch (ex) {
        this.debug(ex);
    }
}

function fileDialogComplete(numFilesSelected, numFilesQueued) {
	try {
		if (numFilesSelected > 0) {
			document.getElementById(this.customSettings.cancelButtonId).disabled = false;
		}
		
		/* I want auto start the upload and I can do that here */
		this.startUpload();
	} catch (ex)  {
        this.debug(ex);
	}
}

function uploadStart(file) {
	try {
		/* I don't want to do any file validation or anything,  I'll just update the UI and
		return true to indicate that the upload should start.
		It's important to update the UI here because in Linux no uploadProgress events are called. The best
		we can do is say we are uploading.
		 */
		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setStatus("Transferindo...");
		progress.toggleCancel(true, this);
	}
	catch (ex) {}
	
	return true;
}

function uploadProgress(file, bytesLoaded, bytesTotal) {
	try {
		var percent = Math.ceil((bytesLoaded / bytesTotal) * 100);

		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setProgress(percent);
		progress.setStatus("Transferindo...");
	} catch (ex) {
		this.debug(ex);
	}
}

function uploadSuccess(file, serverData) {
	try {
		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setComplete();
		progress.setStatus("Completo.");
		progress.toggleCancel(false);

	} catch (ex) {
		this.debug(ex);
	}
}

function uploadError(file, errorCode, message) {
	try {
		var progress = new FileProgress(file, this.customSettings.progressTarget);
		progress.setError();
		progress.toggleCancel(false);

		switch (errorCode) {
		case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:
			progress.setStatus("Upload Error: " + message);
			this.debug("Código de Erro: HTTP Erro, Imagem: " + file.name + ", Mensagem: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:
			progress.setStatus("Upload Failed.");
			this.debug("Código de Erro: Transferência incompleta, Imagem: " + file.name + ", tamanho: " + file.size + ", Mensagem: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.IO_ERROR:
			progress.setStatus("Server (IO) Error");
			this.debug("Código de Erro: IO Erro, Imagem: " + file.name + ", Mensagem: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:
			progress.setStatus("Security Error");
			this.debug("Código de Erro: Erro de Segurança, Imagem: " + file.name + ", Mensagem: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:
			progress.setStatus("Upload limit exceeded.");
			this.debug("Código de Erro: Limite de Transferência excedido, Imagem: " + file.name + ", tamanho: " + file.size + ", Mensagem: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:
			progress.setStatus("Failed Validation.  Upload skipped.");
			this.debug("Código de Erro: Validação da imagem falhou, Imagem: " + file.name + ", tamanho: " + file.size + ", Mensagem: " + message);
			break;
		case SWFUpload.UPLOAD_ERROR.FILE_CANCELLED:
			// If there aren't any files left (they were all cancelled) disable the cancel button
			if (this.getStats().files_queued === 0) {
				document.getElementById(this.customSettings.cancelButtonId).disabled = true;
			}
			progress.setStatus("Cancelado");
			progress.setCancelled();
			break;
		case SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED:
			progress.setStatus("Parado");
			break;
		default:
			progress.setStatus("Unhandled Error: " + errorCode);
			this.debug("Código de Erro: " + errorCode + ", Imagem: " + file.name + ", tamanho: " + file.size + ", Mensagem: " + message);
			break;
		}
	} catch (ex) {
        this.debug(ex);
    }
}

function uploadComplete(file) {
	if (this.getStats().files_queued === 0) {
		document.getElementById(this.customSettings.cancelButtonId).disabled = true;
		
	}
}

// This event comes from the Queue Plugin
function queueComplete(numFilesUploaded) {
	var status    = document.getElementById("divStatus");
	var statused  = document.getElementById("divStatused").style.display = "none";
	var cadastrado= document.getElementById("cadastrado").style.display = "block";
	var img_editar= document.getElementById("img_editar").style.display = "none";
	var cancelar  = document.getElementById("cancelar").style.display = "none";
	status.innerHTML = numFilesUploaded + " image" + (numFilesUploaded === 1 ? "m" : "ns") + " transferida" + (numFilesUploaded === 1 ? "" : "s") + ".";
}
