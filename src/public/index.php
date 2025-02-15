<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Fich-o-matic</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/tailwind.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="font-ledger text-secondary bg-primary h-screen flex justify-center items-center">
        <script src="form-events.js" defer></script>
        <script>
            if(navigator.userAgent.indexOf("Chrome") != -1 )
            {
                var fontsize = "<style>body{font-size: 125%;}</style>";
                }
                else if(navigator.userAgent.indexOf("Opera") != -1 )
                {
                var fontsize = "<style>body{font-size: 100%;}</style>";
                }
                else if(navigator.userAgent.indexOf("Firefox") != -1 )
                {
                var fontsize = "<style>body{font-size: 100%;}</style>";
                }
                else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
                {
                var fontsize = "<style>body {font-size: 100%;}</style>";
                }
                else
                {
                var fontsize = "<style>body {font-size: 100%;}</style>";
                }
                document.writeln(fontsize);
        </script>


        <div class="text-2xl grid grid-cols-7 gap-0 h-[70vh] w-[70vw]">
            <div class="p-2 pt-10 bg-secondary [border-radius:5px_0_0_5px] flex flex-col col-span-2 h-full w-full ">
                <h3 class="text-4xl text-white text-center mt-2 self-center">Réservation</h3>
                <div id="resa-steps" class="grid grid-cols-6 h-full w-full pt-10 pb-8 gap-0">
                    <div id="resa-step-1" class="relative grid grid-cols-6 col-span-6 h-full w-full">
                        <div class="z-50 h-[1em] w-[1em] m-[0.5em] row-span-1 bg-focus rounded-full justify-self-center ">
                            <div id="selected-resa-step-1" class="h-[0.5em] w-[0.5em] m-[0.25em] bg-ternary rounded-full"></div>
                        </div>
                        <div class=" z-0 absolute left-[7.75%] bottom-0 h-[80%] w-[1%] bg-focus "></div>
                        <p class="text-white col-span-5 justify-start mt-[0.25em] hover:cursor-pointer h-fit" >Référence et contact</p>
                    </div>
                    <div id="resa-step-2" class="relative grid grid-cols-6 col-span-6 h-full w-full">
                        <div class="z-50 h-[1em] w-[1em] m-[0.5em] row-span-1 bg-focus rounded-full justify-self-center ">
                            <div id="selected-resa-step-2" class="h-[0.5em] w-[0.5em] m-[0.25em] bg-secondary rounded-full"></div>
                        </div>
                        <div class=" z-0 absolute left-[7.75%] bottom-0 h-full w-[1%] bg-focus "></div>
                        <p class="text-inactif col-span-5 justify-start mt-[0.25em] hover:cursor-pointer h-fit" >Dates et nombres</p>
                    </div>
                    <div id="resa-step-3" class="relative grid grid-cols-6 col-span-6 h-full w-full">
                        <div class="z-50 h-[1em] w-[1em] m-[0.5em] row-span-1 bg-focus rounded-full justify-self-center ">
                            <div id="selected-resa-step-3" class="h-[0.5em] w-[0.5em] m-[0.25em] bg-secondary rounded-full"></div>
                        </div>
                        <div class=" z-0 absolute left-[7.75%] bottom-0 h-full w-[1%] bg-focus "></div>
                        <p class="text-inactif col-span-5 justify-start mt-[0.25em] hover:cursor-pointer h-fit" >Configuration et matériel</p>
                    </div>
                    <div id="resa-step-4" class="relative grid grid-cols-6 col-span-6 h-full w-full">
                        <div class="z-50 h-[1em] w-[1em] m-[0.5em] row-span-1 bg-focus rounded-full justify-self-center ">
                            <div id="selected-resa-step-4" class="h-[0.5em] w-[0.5em] m-[0.25em] bg-secondary rounded-full"></div>
                        </div>
                        <div class=" z-0 absolute left-[7.75%] bottom-0 h-full w-[1%] bg-focus "></div>
                        <p class="text-inactif col-span-5 justify-start mt-[0.25em] hover:cursor-pointer h-fit" >Restauration</p>
                    </div>
                    <div id="resa-step-5" class="relative grid grid-cols-6 col-span-6 h-full w-full">
                        <div class="z-50 h-[1em] w-[1em] m-[0.5em] row-span-1 bg-focus rounded-full justify-self-center ">
                            <div id="selected-resa-step-5" class="h-[0.5em] w-[0.5em] m-[0.25em] bg-secondary rounded-full"></div>
                        </div>
                        <div class=" z-0 absolute left-[7.75%] top-0 h-[20%] w-[1%] bg-focus "></div>
                        <p class="text-inactif col-span-5 justify-start mt-[0.25em] hover:cursor-pointer h-fit" >Récapitulatif</p>
                    </div>
                </div>
                <img src="logo_montcelard-no-circle.png" alt="Logo montcelard" width="130" class="self-center">
            </div>

            <form class="[border-radius:0_5px_5px_0] text-secondary col-span-5 h-full w-full" method="post" action="/public/event.php">
                <div id="form-step-1" class="[border-radius:0_5px_0px_0] bg-ternary h-[87.5%] w-full flex justify-center items-center">
                    <div class="w-[85%] h-full grid grid-cols-2 gap-x-4 p-10 ">
                        <h3 class="text-4xl text-center text-secondary col-span-2">Référence et contact</h3>
                        <div class="flex flex-col col-span-1">
                            <label >Nom formation</label>
                            <input type="text" name="nom-evenement" class="rounded-md border-[1px] border-light " required>
                        </div>
                        <div class="col-span-1"></div>
                        <div class="flex flex-col col-span-1" >
                            <label>Nom contact administratif</label>
                            <input type="text" name="nom-orga-1" class="rounded-md border-[1px] border-light">
                        </div>
                        <div class="flex flex-col col-span-1" >
                            <label >Mail contact administratif</label>
                            <input type="email" name="nom-orga-1" class="rounded-md border-[1px] border-light" required>
                        </div>
                            <div class="flex flex-col col-span-1">
                                <label >Téléphone administratif</label>
                                <input type="text" name="tel-orga-1" class="rounded-md border-[1px] border-light" required>
                            </div>
                            <div class="col-span-1"></div>
                            <div class="flex flex-col col-span-1 h-full">
                                <label class="cols-span-2">Animateur</label>
                                <div class="overflow-scroll scrollbar-hide col-span-2 flex flex-col max-h-[4.2em]">
                                    <div class="flex flex-row">
                                        <input type="text" id="anim-1" name="anim-1" class="mb-1 mr-1 rounded-md border-[1px] border-light grow" required>
                                        <button id="add-animateur" class="bg-primary rounded-md text-2xl pb-1 text-white m-[0.15em_0.25em_0.25em_0.25em] w-[2.5rem] h-[2.5rem] duration-150 hover:bg-secondary">+</button>
                                        <button id="del-btn" class="hidden">-</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div id="form-step-2" class="[border-radius:0_5px_0px_0] bg-ternary flex flex-col hidden justify-start items-center p-10 h-[87.5%] w-full ">
                    <div class="w-[85%] h-full flex flex-col justify-start items-center">
                        <h3 class="text-4xl text-center text-secondary pb-5">Dates et nombre</h3>
                        <div class="flex flex-col w-full h-full justify-center items-center">
                            <div class="flex flex-row w-full mb-5">
                                <div class="flex flex-col mr-2" >
                                    <label for="participant" class="">Nombre participants <b class="text-sm">Formateur(s) inclus</b></label>
                                    <input min="0" type="number" id="participant" name="participant" class="rounded-md border-[1px] border-light" required>
                                </div>
                                <div class="flex flex-col w-full justify-between mr-2">
                                    <div class="flex flex-row justify-between items-center" >
                                        <label for="start-date" class="">Début</label>
                                        <input type="date" id="start-date" name="start-date" class="rounded-md border-[1px] border-light h-[1.5em] ml-1 text-base" required>
                                    </div>
                                    <div class="flex flex-row justify-between items-center" >
                                        <label for="end-date" class="">Fin</label>
                                        <input type="date" id="end-date" name="end-date" class="h-[1.5em] ml-1 rounded-md border-[1px] border-light text-base" required />
                                    </div>
                                </div>
                                <div class="flex flex-col w-full justify-between">
                                    <div class="flex flex-row items-center justify-between" >
                                        <label for="start-hour" class="">Arrivée</label>
                                        <input type="time" id="start-hour" name="start-hour" class="text-base rounded-md border-[1px] border-light h-[1.5em] ml-1" required>
                                    </div>
                                    <div class="flex flex-row items-center justify-between" >
                                        <label for="end-hour" class="">Départ</label>
                                        <input type="time" id="end-hour" name="end-hour" class="text-base h-[1.5em] ml-1 rounded-md border-[1px] border-light" required>
                                    </div>
                                </div>
                            </div>
                            <div opened="false" id="show-calendar-btn" class="self-start rounded-full bg-secondary h-[7%] pr-1 pl-1 flex flex-row justify-center items-center w-fit hover:cursor-pointer duration-150 hover:bg-primary">
                                <p class="text-white text-base">Calendrier ▼</p>
                            </div>
                            <table class="opacity-0 col-span-3 mt-2 overflow-scroll w-full h-[40%]" id="time-table">
                                <thead>
                                    <tr class="text-sm">
                                        <th class="w-[20%]">Date</th>
                                        <th>Arrivé à</th>
                                        <th>Départ à</th>
                                        <th class="w-[20%]">Participants</th>
                                        <th>Jour de pause</th>
                                    </tr>
                                </thead>
                                <tbody class="w-full">
                                    <tr id="day-0-row" class=" text-base ">
                                        <td>  <div id="day-0" class="text-xl flex flex-row justify-between round place-content-center items-center ">Jour 1</div></td>
                                        <td>
                                            <div class="flex items-center justify-center">
                                                <input min="08:00" max="13:00" value="08:00" type="time" name="day-0-start-time" class="bg-focus   text-base start-time" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input min="13:00" max="19:00" value="18:00" type="time" name="day-0-end-time" class=" bg-focus   text-base end-time" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input type="number" min="0" max="90" name="day-0-number" class=" self-center m-auto bg-focus w-1/3   text-base" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <label for="day-0-no-event"  class="text-base text-center flex flex-row items-center justify-center">
                                                <input type="checkbox" id="day-0-no-event" name="day-0-no-event"/>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr id="day-1-row" class=" ">
                                        <td> <div id="day-1" class="text-xl flex flex-row justify-between place-content-center ">Jour 2</div></td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input min="08:00" max="13:00" value="08:00" type="time" name="day-1-start-time" class=" bg-focus   text-base start-time" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input min="13:00" max="19:00" value="18:00" type="time" name="day-1-end-time" class=" bg-focus   text-base end-time" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input type="number" min="0" max="90" name="day-1-number" class="self-center m-auto bg-focus w-1/3   text-base" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <label for="day-1-no-event" class="text-base text-center flex flex-row items-center justify-center">
                                                <input type="checkbox" id="day-1-no-event" name="day-1-no-event"/>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr id="day-2-row" class=" ">
                                        <td> <div id="day-2" class="text-xl flex flex-row justify-between place-content-center ">Jour 3</div></td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input min="08:00" max="13:00" value="08:00" type="time" name="day-2-start-time" class=" bg-focus   text-base start-time" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input min="13:00" max="19:00" value="18:00" type="time" name="day-2-end-time" class=" bg-focus   text-base end-time" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input type="number" min="0" max="90" name="day-2-number" class="self-center m-auto bg-focus w-1/3   text-base" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <label for="day-2-no-event" class="text-base text-center flex flex-row items-center justify-center">
                                                <input type="checkbox" id="day-2-no-event" name="day-2-no-event"/>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr id="day-3-row" class=" ">
                                        <td> <div id="day-3" class="text-xl flex flex-row justify-between place-content-center ">Jour 4</div></td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input min="08:00" max="13:00" value="08:00" type="time" name="day-3-start-time" class=" bg-focus   text-base start-time" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input min="13:00" max="19:00" value="18:00" type="time" name="day-3-end-time" class=" bg-focus   text-base end-time" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input type="number" min="0" max="90" name="day-3-number" class="self-center m-auto bg-focus w-1/3   text-base" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <label for="day-3-no-event" class="text-base text-center flex flex-row items-center justify-center">
                                                <input type="checkbox" id="day-3-no-event" name="day-3-no-event"/>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr id="day-4-row" class=" ">
                                        <td> <div id="day-4" class="text-xl flex flex-row justify-between place-content-center ">Jour 5</div></td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input min="08:00:00" max="13:00:00" value="08:00" type="time" name="day-4-start-time" class=" bg-focus   text-base start-time" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input min="13:00" max="19:00" value="18:00" type="time" name="day-4-end-time" class=" bg-focus   text-base end-time" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-center">
                                                <input type="number" min="0" max="90" name="day-4-number" class="self-center m-auto bg-focus w-1/3   text-base" required/>
                                            </div>
                                        </td>
                                        <td>
                                            <label class="text-base text-center flex flex-row items-center justify-center" for="day-4-no-event">
                                                <input type="checkbox" id="day-4-no-event" name="day-4-no-event"/>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="form-step-3" class="hidden [border-radius:0_5px_0px_0] bg-ternary p-10 w-full h-[87.5%] flex flex-col justify-start items-center">
                    <div class="w-[85%] h-full grid grid-cols-2 gap-x-4">
                        <h3 class="text-4xl text-center text-secondary self-start mb-2 col-span-2">Configuration et matériel</h3>
                        <div class="col-span-2 rounded-md bg-ternary flex flex-col justify-center items-start w-full text-xl">
                            <p class="text-2xl">Configuration</p>
                            <div id="configuration-radios" class="justify-between items-center flex flex-row border-focus-blue border-[2px] rounded-md p-2 w-full ">
                                <span>
                                    <label for="u" class="hover:cursor-pointer duration-150 p-1 border-focus-blue bg-focus-blue text-white rounded-md">En U</label>
                                    <input type="radio" id="u" name="configuration" class="hidden"/>
                                </span>
                                <span>
                                    <label for="cabarets" class="hover:cursor-pointer  duration-150 p-1 border-focus-blue rounded-md">Cabarets/Ilôts </label>
                                    <input type="radio" id="cabarets" name="configuration" class="hidden"/>
                                </span>
                                <span>
                                    <label for="cercle" class="hover:cursor-pointer duration-150 p-1 border-focus-blue rounded-md">Cercle de chaise</label>
                                    <input type="radio" id="cercle" name="configuration" class="hidden"/>
                                </span>
                                <span>
                                    <label for="classe" class="hover:cursor-pointer duration-150 p-1 border-focus-blue rounded-md">Classe</label>
                                    <input type="radio" id="classe" name="configuration" class="hidden"/>
                                </span>
                                <span>
                                    <label for="theatre" class="hover:cursor-pointer duration-150 p-1 border-focus-blue rounded-md">Thêatre</label>
                                    <input type="radio" id="theatre" name="configuration" class="hidden"/>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-2 flex flex-col w-full">
                            <table class="text-base w-full">
                                <thead class="w-full">
                                    <tr class="text-sm w-full">
                                        <th class="text-start">Matériel</th>
                                        <th class="text-start">Quantité</th>
                                        <th class="text-start">Matériel</th>
                                        <th class="text-start">Quantité</th>
                                        <th class="text-start">Ameublement</th>
                                        <th class="text-start">Quantité</th>
                                    </tr>
                                </thead>
                                <tbody class="w-full">
                                    <tr>
                                        <td><label for="stylos">Stylos</label></td>
                                        <td>
                                            <input type="checkbox" name="stylos" id="stylos" class="bg-focus  h-[50%] p-1 w-[30%] " />
                                        </td>
                                        <td><label for="feuilles ">Feuilles</label></td>
                                        <td>
                                            <input type="checkbox" name="feuilles " id="feuilles " class="bg-focus  h-[50%] p-1 w-[30%] " />
                                        </td>
                                        <td class="w-[15%]">
                                            <label for="table-formateur">Table formateur</label>
                                        </td>
                                        <td>
                                            <div class="flex items-center justify-center w-[30%]">
                                                <input type="checkbox" class="bg-focus h-[50%] text-base" id="table-formateur" name="table-formateur" checked/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="ciseaux">Ciseaux</label></td>
                                        <td>
                                            <input type="checkbox" name="ciseaux" id="ciseaux" class="bg-focus  h-[50%] p-1 w-[30%] " />
                                        </td>
                                        <td><label for="scotch">Scotch</label></td>
                                        <td>
                                            <input type="checkbox" name="scotch" id="scotch" class="bg-focus  h-[50%] p-1 w-[30%] " />
                                        </td>
                                        <td class="w-[15%]">
                                            <label for="table-sup">Table supp</label>
                                        </td>
                                        <td>
                                            <input type="number" id="table-sup" name="table-sup" class="bg-focus  h-[90%] text-base  p-1 w-[30%] " min="0" max="4" value="0"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="post-it">Post-It</label></td>
                                        <td>
                                            <input type="checkbox" name="post-it" id="post-it" class="bg-focus  h-[50%] p-1 w-[30%] " />
                                        </td>
                                        <td class="w-[15%]"><label for="feuilles-a1">Feuilles-A1</label></td>
                                        <td>
                                            <input type="checkbox" name="feuilles-a1" id="feuilles-a1" class="bg-focus  h-[50%] p-1 w-[30%] " />
                                        </td>
                                        <td class="w-[15%]">
                                            <label for="chaise-sup">Chaise supp</label>
                                        </td>
                                        <td>
                                            <input type="number" id="chaise-sup" name="chaise-sup" class="bg-focus  h-[90%] text-base  p-1 w-[30%]" min="0" max="6" value="0"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="bloc-note">Bloc-Note</label></td>
                                        <td>
                                            <input type="checkbox" name="bloc-note" id="bloc-note" class="bg-focus  h-[50%] p-1 w-[30%] " />
                                        </td>
                                        <td><label for="gomettes">Gomettes</label></td>
                                        <td>
                                            <input type="checkbox" name="gomettes" id="gomettes" class="bg-focus  h-[50%] p-1 w-[30%] " />
                                        </td>
                                        <td><label for="paperboard">Paperboard</label></td>
                                        <td>
                                            <input type="number" min="0" max="6" name="paperboard" id="paperboard" class="bg-focus  h-[50%] p-1 w-[30%] " value="0"/>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-span-2 flex flex-col justify-center items-start w-full ">
                            <p class="text-2xl">Précisions</p>
                            <textarea rows="3" class=" w-full resize-none text-base max-h-[5em]" maxlength="500" name="configuration-precision"></textarea>
                        </div>
                    </div>
                </div>

                <div id="form-step-4" class="hidden [border-radius:0_5px_0px_0] bg-ternary p-10 w-full h-[87.5%] flex flex-col justify-start items-center">
                    <div class="w-[85%] h-full flex flex-col justify-start items-center ">
                        <h3 class="text-4xl text-center text-secondary self-start mb-2 w-full">Restauration</h3>
                        <p class="text-3xl self-start">Patisserie et Café</p>
                        <div class="grid grid-cols-3 w-full text-base">
                            <div class="flex flex-row items-center justify-between w-full p-1">
                                <label for="cafe-accueil">Café accueil</label>
                                <input type="number" id="cafe-accueil" name="cafe-accueil" value="0" class="w-[17%]" />
                            </div>
                            <div class="flex flex-row items-center justify-between w-full p-1">
                                <label for="dejeune-seminaire">Déjeuné séminaire</label>
                                <input type="number" id="dejeune-seminaire" name="dejeune-seminaire" value="0" class="w-[17%]" />
                            </div>
                            <div class="flex flex-row items-center justify-between w-full p-1">
                                <label for="vegetarien">Végétarien</label>
                                <input type="number" id="vegetarien" name="vegetarien" value="0" class="w-[17%]" />
                            </div>
                            <div class="flex flex-row items-center justify-between w-full p-1">
                                <label for="pause-cafe-matin">Pause café matin</label>
                                <input type="number" id="pause-cafe-matin" name="pause-cafe-matin" value="0" class="w-[17%]" />
                            </div>
                            <div class="flex flex-row items-center justify-between w-full p-1">
                                <label for="coktail-dejeunatoire">Coktail déjeunatoire</label>
                                <input type="number" id="coktail-dejeunatoire" name="coktail-dejeunatoire" value="0" class="w-[17%]" />
                            </div>
                            <div class="flex flex-row items-center justify-between w-full p-1">
                                <label for="gluten">Gluten</label>
                                <input type="number" id="gluten" name="gluten" value="0" class="w-[17%]" />
                            </div>
                            <div class="flex flex-row items-center justify-between w-full p-1">
                                <label for="pause-cafe-aprem">Pause café après-midi</label>
                                <input type="number" id="pause-cafe-aprem" name="pause-cafe-aprem" value="0" class="w-[17%]" />
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-start w-full ">
                            <p class="text-3xl">Autre précisions</p>
                            <textarea rows="3" class=" w-full resize-none text-base max-h-[5em]" maxlength="500" name="restauration-precision"></textarea>
                        </div>
                    </div>
                </div>

                <div id="form-step-5" class="hidden [border-radius:0_5px_0px_0] bg-ternary grid grid-cols-2 gap-x-4 gap-y-5 p-10 w-full h-[87.5%] flex flex-col justify-start"></div>

                <div id="form-btn" class="pr-10 pl-10 bg-white [border-radius:0_0_5px_0] flex justify-center items-center w-full h-[12.5%]">
                    <div class="w-[85%] justify-between items-center flex flex-row">
                        <button id="prev-form"  last="0" class=" m-3 rounded-full bg-focus text-center duration-150 pr-2 pl-2 h-[2em] hover:bg-focus-blue  border-[2px] border-ternary opacity-0">Retour</button>
                        <button id="continue-form" current="1" class="hover:cursor-pointer m-3 pr-2 pl-2 h-[2em] rounded-full bg-secondary text-center text-white duration-150 hover:bg-primary  border-[2px] border-ternary " >Continuer</button>
                        <input name="submit-form" type="submit" id="submit-form" class="hidden hover:cursor-pointer m-3 pr-2 pl-2 h-[2em] rounded-full bg-secondary text-center text-white duration-150 hover:bg-primary  border-[2px] border-ternary " value="Continuer"/>
                    </div>
                </div>
            </form>
        </div>
        <footer>
        </footer>
    </body>
</html>
