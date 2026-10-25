program Angajare;
{pagina 90}

{uses crt;}

const n = 5;
      linie = '----------------------------------------------';

var i, varsta : integer;
    media : real;

function Conditie (v: integer; m : real) : boolean;
         begin
              Conditie := (v >= 20) and (v <= 30) and (m >= 9.0)
         end;

begin
     {clrscr;}
     for i := 1 to n do begin
     writeln('Persoana nr.: ',i);
      write('Introduceti varsta (ani impliniti) : '); readln (varsta);
      write('Introduceti media (bacalaureat) : ');readln (media);
      writeln (linie);
      if Conditie (varsta, media) then
                  writeln ('Poftiti la testul de angajare ! ')
      else writeln('Nu indepliniti conditiile initiale de angajare ! ');
           writeln (linie);
           write('Apasati ENTER pentru continuare');
           readln;
           {clrscr;}
      end
end.