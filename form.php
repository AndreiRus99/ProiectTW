<?php

    include "config.php";

    if(isset($_POST['fsubmit'])) {
        insertR($_POST['f1'], $_POST['f2'], $_POST['f3'], $_POST['f4'], $_POST['f5'], $_POST['f6'], $_POST['f7'], $_POST['f8'], $_POST['f9'], $_POST['f10'], $_POST['f11'], $_POST['f12'], $_POST['f13'], $_POST['f14'], $_POST['f15'], $_POST['f16'], $_POST['f17'], $_POST['f18'], $_POST['f19'], $_POST['f20'], $_POST['f21'], $_POST['f22'], $_POST['f23'], $_POST['f24'], $_POST['f25'], $_POST['f26'], $_POST['f27'], $_POST['f28'], $_POST['f29'], $_POST['f30'], $_POST['f31'], $_POST['f32'], $_POST['f33'], $_POST['f34']);
        header("Location:result.php");
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lexbox</title>
        <link rel="stylesheet" href="form.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

    <body>
        <div id="wrapper">
            <img id="logo" src="Lexbox1.png" alt="Lexbox1">
            <p id="descriere">Acest formular reprezinta metoda cea mai rapida prin care ne puteti trimite toate informatiile si documentele necesare formularii plangerii contraventionale PENTRU FAPTE DIN DOMENIUL RUTIER SAU CELE PREVAUTE DE HOTARARI ALE CONSILIULUI LOCAL. Pentru a putea fi trimis, trebuie sa completati si sa bifati toate campurile. LEXBOX reprezinta o formula simpla si eficienta de a formula o plangere contraventionala fara sa intri in contact direct cu un avocat. Pentru a avea sanse de castig cat mai mari, te rugam sa completezi cu atentie toate campurile de mai jos. Odata ce sunt completate toate campurile si achitat onorariul, ea va ajunge, cu ajutorul nostru, direct la instanta de judecata. </p>

            <form method="post">
                <div class="lista">
                <span><strong>1.  Va rugam sa completati datele persoanei sanctionate prin procesul verbal de contraventie:</span></strong><br><br>
                Nume:<input type="text" name="f1" required>
                Prenume:<input type="text" name="f2" required>
                Telefon:<input  type="text" name="f3" required>
                Email:<input type="text" name="f4" required>
                Adresa procedurala (un doriti sa va fie comunicate citatiile si orice alte acte ale instantei):<input type="text" name="f5" required>
                </div>

                <!--2-->
                <div class="lista">
                <span><strong> 2. Va rugam sa completati numele, prenumele, calitatea si institutia din care face parte agentul constatator:</span></strong><br><br>
                Numele:<input type="text" name="f6" required>
                Prenumele:<input type="text" name="f7" required>
                Calitate:<input type="text" name="f8" required>
                Institutia:<input type="text" name="f9" required>
                </div>

                <!--3-->
                <div class="lista">
                <p class="cerinta"> <strong> 3. Va rugam sa completati numele, prenumele, calitatea si institutia din care face parte agentul constatator:</span></strong><br><br>
                Numele:<input type="text" name="f10" required>
                Prenumele:<input type="text" name="f10" required>
                Calitate:<input type="text" name="f11" required>
                Institutia:<input type="text" name="f12" required>
                <br>

                </div>

                <!--4-->
                <div class="lista">
                <p class="cerinta"> <strong> 4. Sunteti in posesia procesului verbal de contraventie?:</span></strong><br><br>
                <br>
                <input type="radio" id="da" name="f13" value="da">
                Da<br><br>
                <input type="radio" id="nu" name="f13" value="nu">
                Nu
                </div>

                <!--5-->
                <div class="lista">
                <p class="cerinta"> <strong> 5. Va rugam sa completati seria, numarul si data intocmirii procesului verbal:</span></strong><br><br>
                <br>
                Serie:<input type="text" name="f14" required>
                Numar:<input type="text" name="f15" required>
                Data:<input type="date" name="f16" required>
                </div>

                <!--6 aici-->
                <div class="lista">
                <p class="cerinta"> <strong> 6. Cum ati intrat in posesia procesului verbal?:</span></strong><br><br>
                <br>
                <input type="radio" id="inmanare" name="f17" value="inmanare">
                Prin inmanare la fata locului<br><br>
                <input type="radio" id="posta" name="f17" value="posta">
                Prin posta
                </div> 
                <!--7-->
                <div class="lista">
                <p class="cerinta"> <strong> 7. Data inmanarii/comunicarii procesului verbal de contraventie:</span></strong><br><br>
                <input type="date" name="f18" required>
                </div> 

                <!--8-->
                <div class="lista">
                <p class="cerinta"> <strong> 8. Data savarsirii faptei:</span></strong><br><br>
                <input type="date" name="f19" required>
                </div> 
                <!--9-->
                <div class="lista">
                <p class="cerinta"> <strong> 9. Ati platit amenda instituita prin procesul verbal?:</span></strong><br><br>
                <br>
                <input type="radio" id="da" name="f20" value="da">
                Da<br><br>
                <input type="radio" id="nu" name="f20" value="nu">
                Nu
                </div> 

                <!--10-->
                <div class="lista">
                <p class="cerinta"> <strong> 10. Care dintre optiunile de mai jos le solicitati instantei de judecata?:</span></strong><br><br>
                <input type="radio" id="nevinovat" name="f21" value="nevinovat">
                Doresc anularea amenzi pentru ca sunt nevinovat iar amenda este abuziva. Am documente si martori care sa ateste nevinovatia mea<br><br>
                <input type="radio" id="advertisement" name="f21" value="advertisement">
                Doresc preschimbarea amenzii in avertisment pentru ca desi sunt vinovat, sunt la prima abatere contraventionala.<br><br>
                <input type="radio" id="cuantum" name="f21" value="cuantum">
                Doresc reducerea cuantumului amenzii pentru ca amenda primita reprezinta maximul din cat mi se putea aplica sau este disproportionata in raport de veniturile mele
                </div> 

                <!--11-->
                <div class="lista">
                <p class="cerinta"> <strong> 11. Va rugam sa prezentati situatia descrisa in procesul verbal:</span></strong><br><br>
                <textarea class="label" type="text" name="f22"></textarea>
                </div>

                <!--12-->
                <div class="lista">
                <p class="cerinta"> <strong> 12. Va rugam sa prezentati situatia de fapt din punctul dvs de vedere, mai ales daca este diferit de cea prezentata de agentul constatator:</span></strong><br><br>
                <textarea class="label" type="text" name="f23"></textarea>
                </div>

                <!--13-->
                <div class="lista">
                <p class="cerinta"> <strong> 11. Va rugam sa completati articolele si norma legala din procesul verbal cu privire la fapta comisa:</span></strong><br><br>
                Art: <input type="text" name="f24" required>
                Aliniatul: <input type="text" name="f25" required>
                Norma legala in care sunt prevazute faptele contraventionale: <input type="text" name="f26" required>
                </div>

                <!--14-->
                <div class="lista">
                <p class="cerinta"> <strong> 14. Va rugam sa completati articolele si norma legala din procesul verbal verbal cu privire la sanctiunea aplicata:</span></strong><br><br>
                Art: <input type="text" name="f27" required>
                Aliniatul: <input type="text" name="f28" required>
                Norma legala in care sunt prevazute faptele contraventionale: <input type="text" name="f29" required>
                </div>

                <!--15-->
                <div class="lista">
                <p class="cerinta"> <strong> 15. Aveti martori care sa fie audiati de instanta de judecata si care sunt pregatiti sa va probeze nevinovatia?:</span></strong><br><br>
                <input type="radio" id="da" name="f30" value="da">
                Da<br><br>
                <input type="radio" id="nu" name="f30" value="nu">
                Nu
                </div> 

                <!--16-->
                <div class="lista">
                <p class="cerinta"> <strong> 16. Va rugam sa incarcati documentele AICI. Daca nu puteti incarca in formular, ni le puteti trimite separat pe adresa de e-mail:</span></strong><br><br>
                <input type="file" name="f31">
                </div>              

                <!--17-->
                <div class="lista">
                <p class="cerinta"> <strong> 17. Doriti sa va prezentati la sedinta de judecata sau doriti judecarea cereri in lipsa?:</span></strong><br><br>
                <input type="radio" id="da" name="f32" value="da">
                Doresc sa particip la sedinta de judecata<br><br>
                <input type="radio" id="nu" name="f32" value="nu">
                Dorest judecata cereri la chemarea in judecata in lipsa mea
                </div> 

                <!--18-->
                <div class="lista">
                <p class="cerinta"> <strong> 18. Doriti sa fiti asistat de un avocat in sala de judecata?:</span></strong><br><br>
                <input type="radio" id="da" name="f33" value="da">
                Da<br><br>
                <input type="radio" id="nu" name="f33" value="nu">
                Nu
                </div> 

                <!--19-->
                <div class="lista">
                <p class="cerinta"> <strong> 19. Mentionez ca am citit si sunt de acord cu termenii si conditiile prezentei aplicatii:</span></strong><br><br>
                <input type="radio" id="da" name="f34" value="da">
                Da<br><br>
                <input type="radio" id="nu" name="f34" value="nu">
                Nu
                <br> 
                </div> 
                <input type="submit" value="Trimite" name="fsubmit">
                </div>
            </form>
        
    </body>
</html>