<?php 
require_once APPPATH.'third_party/TCPDF/tcpdf.php';
class Pdfci {
   	//funciones que queremos implementar en Miclase.
	public $TCPDF;
	

    public function __construct()
    {
    	$this->TCPDF = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	}	

	// Los siguientes metodos son para tener mas estructurado la creacion de pdf

	public function generarCabecera() // aqui se configurara todos los pdf`s
	{
		// set document information
		$this->TCPDF->SetCreator(PDF_CREATOR);
		$this->TCPDF->SetAuthor('Nicola Asuni');
		$this->TCPDF->SetTitle('TCPDF Example 006');
		$this->TCPDF->SetSubject('TCPDF Tutorial');
		$this->TCPDF->SetKeywords('TCPDF, PDF, example, test, guide');

		// set default header data
		$this->TCPDF->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

		// set header and footer fonts
		$this->TCPDF->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->TCPDF->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$this->TCPDF->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$this->TCPDF->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$this->TCPDF->SetHeaderMargin(PDF_MARGIN_HEADER);
		$this->TCPDF->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$this->TCPDF->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$this->TCPDF->setImageScale(PDF_IMAGE_SCALE_RATIO);

		

		// ---------------------------------------------------------

		// set font
		$this->TCPDF->SetFont('dejavusans', '', 10);

		// add a page
		$this->TCPDF->AddPage();
	}

	public function generarPieDePagina()
	{

	}

}

?>