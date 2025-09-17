    <section class="page-indicator">
        <section class="steps_sec">
            <ul class="nav nav-tabs nav-justified">
                <li><span>1</span> <strong>Termék<br> kiválasztása</strong></li>
                
                <li {if $oldal==$alnev.kosar}class="active"{/if}><span>2</span> <strong>Kosár<br> tartalma</strong></li>
                
                <li {if $oldal==$alnev.szallitas}class="active"{/if}><span>3</span> <strong>Átvétel,<br> fizetés módja</strong></li>
                
                <li {if $oldal==$alnev.belepes || $oldal==$alnev.regisztracio}class="active"{/if}><span>4</span> <strong>Regisztráció,<br> bejelentkezés</strong></li>
                
                <li {if $oldal==$alnev.rendeles_attekinto}class="active"{/if}><span>5</span> <strong>Rendelés<br> áttekintése</strong></li>
                
                <li {if $oldal==$alnev.megrendeles}class="active"{/if}><span>6</span> <strong>Befejezés</strong></li>
            </ul>
        </section>
    </section>        