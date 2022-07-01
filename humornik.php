<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humorník</title>
</head>
<style>
    @font-face {
        font-family: DiodrumRounded;
        src: url("DiodrumRounded-Bold.otf") format("opentype");
    }
    #imgbg{
        background-color:#F45E3D;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }
    #middle{
        background-color: rgba(0, 0, 0, 0.5);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        height: 100%;
        position: absolute;
    }
    #header{
        font-family: DiodrumRounded;
        color: white;
        text-align: center;
        align-items: center;
        font-size: 50px;
    }
    #button{
        font-family: DiodrumRounded;
        font-size: 30px;
        color: white;
        background-color: #F3411B;
        top: 75%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
        padding: 10px;
        border-radius: 5px;
    }
    .jokePosition{
        position: absolute;
        background-color: rgba(0, 0, 0, 0.1);
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 5;
        width: 400px;
        height: 300px;
        padding: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 5px;
        padding-right: 5px;
        border-radius: 5px;
    }
    #joke{
        font-family: DiodrumRounded;
        font-size: 20px;
        color: white;
        align-items: center;
        text-align: center;
        top: 3%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: relative;
        
    }
    #jokeCount{
        font-family: DiodrumRounded;
        font-size: 15px;
        color: white;
        top: 93%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }
    #jokeCounter{
        font-family: DiodrumRounded;
        font-size: 20px;
        color: white;
        top: 95%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }
</style>
<body>
<?php 
$jokes = array
(
 "Matikářka: „Umíte v rovnici odstranit závorku?“<br>
 Pepíček: „Tak pokud je napsaná gumovacím perem...“",

 "Můj muž musí být jasnovidec! Když jsem mu zavolala z mobilu mé kolegyně, řekl mi:<br>
  „Ahoj lásko, co potřebuješ?“",

 "Ptá se syn tatínka „Tati, co je to skleróza?“<br>
 „Na co ses ptal?“<br>
 „Kdy?“<br>",

 "Chlapík volá manželce:<br>
 „Miláčku, máš raději hory, nebo moře?“<br>
 „To víš, že moře! Ty kupuješ dovolenou?“<br>
 „Co? Ale ne, vybírám sprej na záchod.“<br>",

 "Jdeš k truhláři,<br>
 na zemi jsou piliny.<br>
 Jdeš ke kadeřnici,<br>
 na zemi jsou vlasy.<br>
 Jdeš do banky... a nic!!!<br>
 I pero mají na šňůrce!<br>",

 "Kolega říkal, ať mu zavolám po pátý, tak mu volám už pošesté a pořád mi to nebere!<br>",

 "Žák: „Pane učiteli, co jste mi to napsal tady k té písemce, já to po vás nemůžu přečíst!“<br>
 Učitel: „To je piš čitelněji!“<br>",

 "Jak je to možné, že jedna neopatrně odhozená zápalka dokáže rozpoutat obrovský lesní požár,
  a přitom potřebujete celou krabičku, abyste zapálili jeden mizerný táborák?",

 "„Spěte dnes při otevřeném okně!“ 1400 komárů tomu dalo To se mi líbí, 420 komárů přidalo komentář,
  210 komárů to sdílelo, 2800 komárů potvrdilo účast.",

  "Lidé nenávidí budík ve dvou případech:<br>
  když zvoní<br>
  když nezazvonil<br>",

  "Blondýnka si v letadle sedne k oknu. Za chvilku k ní přijde fešný chlapík a povídá:<br>
  „Promiňte, slečno, ale toto sedadlo je moje.“<br>
  Blondýnka: „Dej si odpich, mladej, takový blbý finty znám… neotravuj!“<br>
  Chlapík pokrčí rameny a prohodí: „No, tak si to letadlo nastartuj sama.“<br>",

  "Zjistil jsem, že je moje rodina strašně rasistická.
   Jakmile jsem jim představil svoji novou japonskou přítelkyni,
   všichni na mě začali křičet. Nejvíc moje manželka.",

  "Manželka si čte v knize básní.<br>
  „Karle?“ volá na muže, „Tady někdo opsal básničku, kterou jsi před třiceti lety složil jen a jen pro mě!“<br>",

  "Baví se dva majitelé psů: „Můj pes, Azor, je strašně inteligentní. Každý den mi kupuje noviny.“<br>
  „Já vím, Fousek mi to říkal.“<br>",

  "Žena dostala od kámošky pěkné trojbarevné koťátko. Je milé a přítulné, ale bohužel její manžel je alergický na kočičí srst, a tak ho musí dát pryč.<br>
   Kdyby ho někdo chtěl, jmenuje se Tonda, je mu 40 let, měří 175 cm a má prošedivělé vlasy.<br>",

  "Povídají si dvě babky<br>
  První povídá: „Neříkej mi, že ty svýho starýho máš pořád tak ráda, když mu furt říkáš lásko, miláčku, …“<br>
  Druhá povídá: „No, já ho nemám tak ráda, ale já před deseti lety zapomněla jeho jméno.“<br>",

  "„Prosím vás, kde najdu knihu o manželském štěstí?“<br>
  „Zkuste oddělení pohádek nebo fantasy.“<br>",

  "„Pane doktore, opravdu mne budou operovat studenti?“<br>
  „Ano.“<br>
  „A co když umřu?“<br>
  „Dostanou pětku.“<br>",

  "S manželkou jsme se dohodli, že nechceme mít děti.<br>
  Dnes u večeře jim to řekneme.<br>",

  "
  Jeden chameleon říká druhému: „Mě to tady už s tebou nebaví. Jdu pryč.“<br>
  Druhý řekne: „Počkej, já se změním.“<br>",

  "Jde Pepíček do zverimexu koupit si křečka.<br>
  „Dobrý den, kolik stojí?“ zeptá se.<br>
  „Šedesát korun za kus,“ odpoví prodavačka.<br>
  „Ale já nechci kus! Já chci celého křečka!“<br>",

  "Víte jak se dá poznat opravdová přírodní blondýnka již ve škole?<br>
  Když učitelka smaže tabuli, ona vygumuje sešit...<br>",

  "Dvě blondýny hrajou šachy.<br>
   Góóól!<br>
   To neni tenis, ty krávo.<br>",

   "Jak si blondýna mohla zlomit nohu při hrabaní listí?<br>
   Spadla ze stromu.",

   "Šéf blondýnce: Váš nástupní plat je 8000 Kč. Časem můžete mít plat 12000 Kč.<br>
   Blondýnka: Tak já tedy přijdu raději časem.<br>",

   "Slyšeli jste o té blondýnce, která stála před zrcadlem se zavřenýma očima?<{r>
   Chtěla vidět, jak vypadá, když spí.<br>",

   "Víš co dělá blondýna ve skříni? Poslouchá kabáty.",

   "Mamka: „Jak bylo dnes ve škole?“<br>
   Já: „No… psali jsme test.“<br>
   Mamka: „Kolik otázek jsi věděl?“<br>
   Já: „Jednu.“<br>
   Mamka: „Jakou?“<br>
   Já: „Svoje jméno a příjmení.“<br>",

   "Doktor mluví k zdravotní sestře.<br
   „Sestro, proč budíte toho pacienta?“<br>
   „Musí ještě dostat prášky na spaní.“<br>",

   "„Pepíčku, skoč k řezníkovi, jestli nemá prasečí nožky.“<br>
   Za chvilku: „Tak co, má?“<br>
   „Nevím, měl na nohách bačkory.“<br>",

   "Doktor mi doporučil, abych si vždy před spaním dal panáka slivovice.<br>
    Dneska jsem si šel lehnout už dvanáctkrát.",

    "Velikonoční beránek si vzdychne: „Jsem z formy.“<br>",

    "„Mamí, sleduj jakého jsme postavili sněhuláka!“<br>
    „Ten je nádherný! A jak má vyvedené ručičky.“<br>
    „To bude tím, že jsme do něj zaplácali tatínka.“<br>",

    "Praha–⁠Brno= 205 km<br>
    Brno–⁠Praha = 205 km<br>
    Země–Měsíc = 384 403 km<br>
    Měsíc–Země = 384 403 km<br>
    pondělí–pátek = 4 dny<br>
    pátek–pondělí = 3 dny<br>
    Nějak tomu nerozumím.<br>",

    "Chlapík, který mi to auto prodával, tvrdil, že má pět kol. Bral jsem to s rezervou.<br>",

    "Pes rozumí zhruba 150 slovům, to je mentální věk tříletého dítěte. Kočka rozumí úplně všemu, ale je jí to jedno.<br>
     To odpovídá mentálnímu věku padesátiletého ženatého chlapa.",

     "Otec a jeho dvě děti jsou na pohřbu. Kněz stojí vedle rakve a říká:<br>
      „Loučíme se zde s ženou cnostnou, ušlechtilou, hodnou, milou, věrnou manželkou a matkou dvou dětí.“<br>
      Vtom se otec na děti otočí a říká:<br>
      „Děcka, jdeme pryč, asi jsme na špatným pohřbu!“<br>",

      "Maminka přijde domů a zeptá se Pepíčka:<br>
      „Pepíčku, proč jíš ty peníze?“<br>
      „Vždyť jsi mi je dala na oběd.“<br>",

      "Přijde blondýna na letiště a ptá se na informacích: „Dobrý den, jak dlouho trvá let z Prahy do Egypta?“<br>
      Paní odpoví: „Vteřinku prosím...“<br>
      Blondýna: „Děkuju, nashledanou.“<br>",

      "Vlítne kovboj do kantýny a zařve: „Kdo mi ukradl mého koně? Jestli se okamžitě nepřizná, tak udělám to, co můj strýc před padesáti lety!“<br>
      Chvíli je ticho a pak se ozve jeden muž: „Máš ho za rohem.“<br>
      Pak mu to nedá a zeptá se: „Co udělal tvůj strýc před padesáti lety?“<br>
      „Šel domů pěšky.“<br>",

);

$jokeGenerate = array_rand(array_flip($jokes));
?>

<div id="imgbg">
    <div id="middle">
        <div class="jokePosition">
            <p id="joke"><?php echo $jokeGenerate ?></p>
        </div>
        <h3 id="header">Humorník</h3>
        <button id="button" onclick="window.location.reload();">Generuj vtip!</button>
        <p id="jokeCount">V databází se momentálně nachází<br></p>
        <p id="jokeCounter"> <?php echo count($jokes);?> vtipů<br></p>
    </div>
</div> 
</body>
</html>