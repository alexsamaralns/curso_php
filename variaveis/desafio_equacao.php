<div class="titulo">Desafio Equação</div>

<?php
    $dividendo1 = (6 * (3 + 2)) ** 2;
    $divisor1 = 3 * 2;
    $dividendo2 = (1 - 5) * (2 - 7);
    $divisor2 = 2;
    $divisao1 = $dividendo1 / $divisor1;
    $divisao2 = ($dividendo2 / $divisor2) ** 2;
    $dividendo3 = ($divisao1 - $divisao2) ** 3;
    $divisor3 = 10 ** 3;
    $resultado = $dividendo3 / $divisor3;
    echo '
        <ul>
            <li style="list-style: none; float:left;">
                <div style="background-color: #1867c0; color: white; border-radius: 8px; padding-left: 30px; width: 650px; height: 250px;">
                    <ul>
                        <li style="list-style: none; font-size:8rem; float:left;">(</li>
                        <li style="float:left; list-style: none; margin-top: 40px;">
                            <p style="border-bottom: 4px solid #ffffff;">[6*(3+2)]²</p>
                            <p style="margin-top: -35px; margin-left: 40px;">    3*2   </p>                                         
                        </li>
                        <li style="font-size:8rem; float:left; font-size:4rem; list-style: none; margin-top: 60px; margin-left: 20px;">-</li>
                        <li style="font-size:8rem; float:left; font-size:4rem; list-style: none; margin-top: 60px; margin-left: 20px;">(</li>
                        <li style="float:left; list-style: none; margin-top: 40px; margin-left: 20px;">
                            <p style="border-bottom: 4px solid #ffffff;">(1-5)*(2-7)</p>
                            <p style="margin-top: -35px; margin-left: 60px;">    2   </p>                                         
                        </li>
                        <li style="font-size:8rem; float:left; font-size:4rem; list-style: none; margin-top: 60px; margin-left: 20px;">)²</li>
                        <li style="font-size:8rem; float:left; list-style: none;">)³</li>
                    </ul>
                    <br><br><br><br>
                    <section style="width: 600px; border-top: 3px solid #ffffff ;"></section>
                    <ul>
                        <li style="float:left; list-style: none; margin-top: 40px;">
                            <p style="margin-top: -50px; margin-left: 220px;">10³</p>                                         
                        </li>
                    </ul>
                </div>  
            </li>
            <li style="list-style: none; float:left; font-size:8rem; margin-left: 10px; margin-top: 20px;">=</li>
            <li style="list-style: none; float:left; font-size:8rem; margin-left: 10px; margin-top: 20px; font-weight: 500">
                    ' . $resultado . '
            </li>
        </ul>  
    ';
?>