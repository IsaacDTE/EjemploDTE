<?php

// Valores del documento
$tipoDTE = $_POST['tipodte'];
$folio = $_POST['folio'];
$fechaEmision = $_POST['fchemis'];
$idDoc = sprintf('F60T%s', $tipoDTE);

// Datos del Emisor
$rutEmisor = $_POST['rutemisor'];
$rznsocEmis = $_POST['rznsoc'];
$giroEmis = $_POST['giroemis'];
$acteco = $_POST['acteco'];
$cdgsiisucur = $_POST['cdgsiisucur'];
$dirorigen = $_POST['dirorigen'];
$cmnaorigen = $_POST['cmnaorigen'];
$ciudadorigen = $_POST['ciudadorigen'];

// Datos del Receptor
$rutrecep = $_POST['rutrecep'];
$rznsocrecep = $_POST['rznsocrecep'];
$girorecep = $_POST['girorecep'];
$dirrecep = $_POST['dirrecep'];
$cmnarecep = $_POST['cmnarecep'];
$ciudadrecep = $_POST['ciudadrecep'];

// Detalle 1
$nrolindet1 = $_POST['nrolindet1'];
$nmbitem1 = $_POST['nmbitem1'];
$qtyitem1 = $_POST['qtyitem1'];
$prcitem1 = $_POST['prcitem1'];

// Detalle 2
$nrolindet2 = $_POST['nrolindet2'];
$nmbitem2 = $_POST['nmbitem2'];
$qtyitem2 = $_POST['qtyitem2'];
$prcitem2 = $_POST['prcitem2'];


$xmlDTE = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
<DTE version=\"1.0\">
    <Documento ID=\"$idDoc\">
        <Encabezado>
            <IdDoc>
                <TipoDTE>$tipoDTE</TipoDTE>
                <Folio>$folio</Folio>
                <FchEmis>$fechaEmision</FchEmis>
            </IdDoc>
            <Emisor>
                <RUTEmisor>$rutEmisor</RUTEmisor>
                <RznSoc>$rznsocEmis</RznSoc>
                <GiroEmis>$giroEmis</GiroEmis>
                <Acteco>$acteco</Acteco>
                <CdgSIISucur>$cdgsiisucur</CdgSIISucur>
                <DirOrigen>$dirorigen</DirOrigen>
                <CmnaOrigen>$cmnaorigen</CmnaOrigen>
                <CiudadOrigen>$ciudadorigen</CiudadOrigen>
            </Emisor>
            <Receptor>
                <RUTRecep>$rutrecep</RUTRecep>
                <RznSocRecep>$rznsocrecep</RznSocRecep>
                <GiroRecep>$girorecep</GiroRecep>
                <DirRecep>$dirrecep</DirRecep>
                <CmnaRecep>$cmnarecep</CmnaRecep>
                <CiudadRecep>$ciudadrecep</CiudadRecep>
            </Receptor>
            <Totales>
                <MntNeto></MntNeto>
                <TasaIVA></TasaIVA>
                <IVA></IVA>
                <MntTotal></MntTotal>
            </Totales>
        </Encabezado>
        <Detalle>
            <NroLinDet>$nrolindet1</NroLinDet>
            <NmbItem>$nmbitem1</NmbItem>
            <QtyItem>$qtyitem1</QtyItem>
            <PrcItem>$prcitem1</PrcItem>
        </Detalle>
        <Detalle>
            <NroLinDet>$nrolindet2</NroLinDet>
            <NmbItem>$nmbitem2</NmbItem>
            <QtyItem>$qtyitem2</QtyItem>
            <PrcItem>$prcitem2</PrcItem>
        </Detalle>
    </Documento>
</DTE>";
/*$xmlDTE = htmlentities($xmlDTE);
echo "<pre>
$xmlDTE
</pre>";*/

$envioDTE = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
<EnvioDTE xmlns=\"http://www.sii.cl/SiiDte\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sii.cl/SiiDte EnvioDTE_v10.xsd\" version=\"1.0\">
  <SetDTE ID=\"LibreDTE_SetDoc\">
    <Caratula version=\"1.0\">
      <RutEmisor>16271370-1</RutEmisor>
      <RutEnvia>7880442-4</RutEnvia>
      <RutReceptor>60803000-K</RutReceptor>
      <FchResol>2003-09-02</FchResol>
      <NroResol>0</NroResol>
      <TmstFirmaEnv>2016-08-23T14:46:43</TmstFirmaEnv>
      <SubTotDTE>
        <TpoDTE>33</TpoDTE>
        <NroDTE>1</NroDTE>
      </SubTotDTE>
    </Caratula>
    $xmlDTE
  </SetDTE>
</EnvioDTE>";

$envioDTE = htmlentities($envioDTE);
echo "<pre>
$envioDTE
</pre>";