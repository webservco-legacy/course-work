{Casa 0.0.060106}
{Bazat Pe Programul "CasierAutomat"}
{Primul Meu Program :-) }
program Casa;
        var pret, suma, rest : integer;
        begin
             write ('Pretul produsului=') ; readln (pret);
         write ('Suma platita de client='); readln (suma);
             rest := suma - pret;
             if suma < pret then writeln ('Suma platita este insufifienta!')
             else begin
                       writeln ('Rest = ', rest,' lei ');
              end;
             readln
        end.



