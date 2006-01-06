{Casa 1.0.060106}
{bazat pe programul "CasierAutomat"}
program Casa;

var
   pret, suma, rest : integer;
var
   nume : string;

begin
     repeat
           writeln ('Poftiti la casa!');
           writeln ('');
           readln;
           write ('Numele Produsului:') ;
           readln (nume);
           if nume = '' then writeln ('Nu cumparati nimic')
           else if nume <> '' then
           begin
                write ('Pretul produsului:') ; readln (pret);
                if pret = 0 then
                writeln ('Produs Gratuit ?')
                else begin
                     write ('Suma platita de client:'); readln (suma);
                     rest := suma - pret;
                     if suma = pret then writeln ('Nu trebuie dat rest!')
                     else if suma < pret then writeln ('Suma platita este insufifienta!')
                     else begin
                          writeln ('Rest de primit: ', rest,' lei ');
                          end;
                end;
           end;
     readln
     until nume = ''
end.



