<?
// Скріпт по скачуванню файлів!!! Важливо: нічого не вставляти перед скріптом, навіть коментар, буде видавати помилку header!!!

// задаєм адресу файлу скачування
$fileName = 'rc/aplication.pdf';

function file_download($file)
{
	// скидаємо буфер, для безпеки переповнення
	if (file_exists($file))
	{
		if (ob_get_level()) 
		{
			ob_end_clean();	
		}	
		// show window with save function
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' .basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cash-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		// reed file and send it to user
		readfile ($file);
		exit;
	}
}

// виклик функції
file_download($fileName);

?>