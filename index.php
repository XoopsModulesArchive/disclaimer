<?php

include '../../mainfile.php';

    $xoopsOption['show_rblock'] = 0;
    include $xoopsConfig['root_path'] . 'header.php';

OpenTable();

// your definitions
$domain = '';
$fullname = '';
$street = '';
$zipcity = '';
$email = '';

echo "
<div style='font-family:Tahoma,Sans-serif; font-size:11px;'>
<center>Impressum/Disclaimer</center>
<br><br>
<br><br>

<center><b style='text-decoration:underline; font-size:12px;'>Impressum gemäß §6 Teledienstegesetz (TDG), §6 Mediendienste-Staatsvertrag(MDSTv) und<br>
§4 Abs. 3 Bundesdatenschutzgesetz (BDSG)</b></center>
<br><br>
Verantwortlicher Redakteur und Webmaster für die Planung, Realisierung und Betreuung der
Internetinhalte sowie für die Administration der Domain " . $domain . ' (Admin-c) ist:
<br><br><center>
' . $fullname . '<br>
' . $street . '<br>
' . $zipcity . '<br>
EMail: ' . $email . "<br>
<br><br>
<b style='text-decoration:underline; font-size:12px;'>Verwendung von Cookies</b></center>
<br><br>
Wir verwenden auf unserer Web-Site Cookies, um personalisierte Dienste und Informationen anbieten zu können. Sie haben dadurch die Möglichkeit, dauerhafte Voreinstellungen für Ihren Account vorzunehmen - z.B. die Anzahl von Artikeln auf der Homepage, die Darstellung von Kommentaren, das Erscheinungsbild der gesamten Web-Site und vieles mehr. Diese Informationen werden in einem Cookie auf Ihrem Computer gespeichert. Wenn Sie Cookies prinzipiell nicht akzeptieren, können Sie unsere Seiten trotzdem besuchen. Sie müssen sich aber jedesmal neu anmelden, um Ihre persönlichen Voreinstellungen nutzen zu können.
<br><br>
<center><b style='text-decoration:underline; font-size:12px;'>RECHTLICHER HINWEIS / NUTZUNGSBEDINGUNGEN VON " . $domain . '</b></center>
<br><br>
Eine Vervielfältigung, der auf diesen Seiten angebotenen Dateien und Texte, auf ein jegliches Medium bedarf der direkten oder konkludenten Genehmigung durch die Autoren. Die Darstellung einer Seite aus diesem Dienst in dem Frame einer fremden Seite oder das Darstellen von Inhalten dieses Dienstes als eigene Information ist grundsätzlich untersagt. Für Artikel innerhalb dieses Dienstes ist der jeweilige Autor verantwortlich. Diese Artikel stellen die Meinung dieses Autors dar und spiegeln nicht grundsätzlich die Meinung des Seitenbetreibers dar. Bei einer Verletzung von fremden Urheberrecht oder sonstiger Rechte durch den Seitenbetreiber oder eines Autors, ist auf die Verletzung per eMail hinzuweisen. Bei Bestehen einer Verletzung wird diese umgehend beseitigt.
<br><br>
' . $domain . ' übernimmt keinerlei Haftung für Schäden, die durch das System (die Internetseite) oder die angeboten Dateien entstehen. Alle Dateien sind auf Viren geprüft. Der Benutzer wird hiermit darauf hingewiesen, selber die Dateien auf Viren u.ä. zu prüfen. Eine Garantie für die Sicherheit der Dateien kann nicht gegeben gegeben werden, da diese Dateien meisst nicht aus unserer Produktion stammen. Auch kann keine Garantie übernommen werden für die Erreichbarkeit unseres Services und von Dateien. Es wird jedoch eine höchstmögliche Erreichbarkeit angestrebt. Diese kann technisch jedoch nicht immer realisiert werden. Das Herunterladen, die Installation und die Verwendung der Programme die unter ' . $domain . ' aufgeführt werden, erfolgt auf eigene Gefahr! Der Betreiber übernimmt keine Gewährleistung oder Haftung für etwaige Schäden, Folgeschäden oder Ausfälle, die entstehen können.
<br><br>
Dieser Service wird jedem Benutzer eröffnet der sich an die folgenden Bedingungen hält und diese akzeptiert. ' . $domain . ' ist umsonst für alle frei erreichbaren Bereiche. Keine Kosten entstehen, ohne, daß der Benutzer ausdrücklich darauf hingewiesen wird. Alle Informationen, Firmenzeichen, Texte, Programme, Grafiken und Bilder unterliegen dem Urheberrecht. Alle benutzen Warenzeichen und Firmenbezeichnungen unterliegen dem Copyright der jeweiligen Firmen.
<br><br>
Erklärung: Bei unseren externen Links handelt es sich um eine subjektive Auswahl von Verweisen auf andere Internetseiten. Für den Inhalt dieser Seiten sind die jeweiligen Betreiber / Verfasser selbst verantwortlich und haftbar. Von etwaigen illegalen, persönlichkeitsverletzenden, moralisch oder ethisch anstößigen Inhalten distanzieren wir uns in aller Deutlichkeit. Bitte Informieren Sie uns, wenn wir auf ein solches Angebot linken sollten. ' . $domain . ' ist als Inhaltsanbieter für die eigenen Inhalte, die er zur Nutzung bereithält, nach den allgemeinen Gesetzen verantwortlich. Von diesen eigenen Inhalten sind Querverweise (Links) auf die von anderen Anbietern bereitgehaltenen Inhalte zu unterscheiden. Für diese fremden Inhalte ist ' . $domain . ' nur dann verantwortlich, wenn von ihnen (d.h. auch von einem rechtswidrigen bzw. strafbaren Inhalt) positive Kenntnis vorliegt und es technisch möglich und zumutbar ist, deren Nutzung zu verhindern (§5 Abs.2 TDG).
<br><br>
Bei Links handelt es sich allerdings stets um lebende (dynamische) Verweisungen. ' . $domain . ' hat bei der erstmaligen Verknüpfung zwar den fremden Inhalt daraufhin überprüft, ob durch ihn eine mögliche zivilrechtliche oder strafrechtliche Verantwortlichkeit ausgelöst wird. Der Inhaltsanbieter ist aber nach dem TDG nicht dazu verpflichtet, die Inhalte, auf die er in seinem Angebot verweist, ständig auf Veränderungen zu überprüfen, die eine Verantwortlichkeit neu begründen könnten. Erst wenn er feststellt oder von anderen darauf hingewiesen wird, daß ein konkretes Angebot, zu dem er einen Link bereitgestellt hat, eine zivil- oder strafrechtliche Verantwortlichkeit auslöst, wird er den Verweis auf dieses Angebot aufheben, soweit ihm dies technisch möglich und zumutbar ist. Die technische Möglichkeit und Zumutbarkeit wird nicht dadurch beeinflußt, daß auch nach Unterbindung des Zugriffs von ' . $domain . ' von anderen Servern aus auf das rechtswidrige oder strafbare Angebot zugegriffen werden kann. Salvatorische Klausel: Sollte aus irgendwelchen Gründen eine der vorstehenden Bedingungen ungültig sein, so wird die Wirksamkeit der anderen Bestimmungen davon nicht berührt. Diesen Disclaimer verwenden wir hier unter Anderem mit freundlicher Genehmigung des Datenschutzbeauftragten Berlin, von dessen Website wir ihn für unsere Zwecke abgeleitet haben und der ihn jedem, der ihn gerne verwenden möchte, ebenfalls zur Verfügung stellt.
<br><br>
</center></div>';

CloseTable();
include $xoopsConfig['root_path'] . 'footer.php';
