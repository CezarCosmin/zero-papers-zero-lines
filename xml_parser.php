 <?php

$xml = simplexml_load_file("diploma_12clase.xml");

foreach ($xml->absolvent as $absolvent)
{
echo "Nume: ".(string)$xml->absolvent->nume . '<br />';
echo "Localitate: ".(string)$xml->absolvent->localitate . '<br />';
echo "Judet: ".(string)$xml->absolvent->judet . '<br />';
echo "Absolvent al liceului: ".(string)$xml->absolvent->diploma->absolvent_al_liceului . '<br />';
echo "Filiera: ".(string)$xml->absolvent->diploma->filiera . '<br />';
echo "Profil: ".(string)$xml->absolvent->diploma->profil . '<br />';
echo "Specializarea: ".(string)$xml->absolvent->diploma->specializarea . '<br />';
echo "Sesiunea: ".(string)$xml->absolvent->diploma->sesiunea . '<br />';
echo "Evaluare omunicare orala limba romana: ".(string)$xml->absolvent->diploma->situatie_note->evaluare_comunicare_orala_romana . '<br />';
echo "Evaluare competente lingvistice engleza: <br/>  -Intelegerea textului audiat: ".(string)$xml->absolvent->diploma->situatie_note->evaluare_competente_lingvistice_engleza->intelegerea_textului_audiat . '<br />';
echo "-Intelegerea textului citit: ".(string)$xml->absolvent->diploma->situatie_note->evaluare_competente_lingvistice_engleza->intelegerea_textului_citit . '<br />';
echo "-Producerea de mesaje scrise: ".(string)$xml->absolvent->diploma->situatie_note->evaluare_competente_lingvistice_engleza->producerea_de_mesaje_scrise . '<br />';
echo "-Producerea de mesaje orale: ".(string)$xml->absolvent->diploma->situatie_note->evaluare_competente_lingvistice_engleza->producerea_de_mesaje_orale . '<br />';
echo "-Interactiunea orala: ".(string)$xml->absolvent->diploma->situatie_note->evaluare_competente_lingvistice_engleza->interactiune_orala . '<br />';
echo "Evaluare competente digitale:  <br/> -Punctaj: ".(string)$xml->absolvent->diploma->situatie_note->evaluare_competente_digitale->punctaj . '<br />';
echo "-Grad: ".(string)$xml->absolvent->diploma->situatie_note->evaluare_competente_digitale->grad . '<br />';
echo "Limba si literatura romana(scris): ".(string)$xml->absolvent->diploma->situatie_note->limba_si_literatura_romana_scris. '<br />';
echo "Matematica: ".(string)$xml->absolvent->diploma->situatie_note->matematica. '<br />';
echo "Fizica: ".(string)$xml->absolvent->diploma->situatie_note->fizica. '<br />';

echo "<br/>" . "<br/>" . " <br/> <br/>";
}
?> 