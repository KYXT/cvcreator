let jobs = [];
let educations = [];
let languages = [];
let skills = [];
let hobbies = [];

window.onload = function () {

    prepareEditor(document);

    let historyForms = document.getElementsByClassName("history-form");

    for (let historyForm of historyForms) {

        historyForm.addEventListener("click", (event) => {

            if (event.target.nodeName == "H4") {

                historyForm.querySelector("#form-content").classList.toggle("d-none");

                if (historyForm.querySelector('#hidden-content') != null) {
                    return;
                }

                switch (historyForm.id) {

                    case "work_experience":
                        if (jobs.length == 0) {
                            addWorkExperticeTemplate(historyForm);
                        }
                        break;
                    case "education":
                        if (educations.length == 0) {
                            addEducationTemplate(historyForm);
                        }
                        break;
                    case "languages":
                        if (languages.length == 0) {
                            addLanguagesTemplate(historyForm);
                        }
                        break;
                    case "skills":
                        if(skills.length == 0){
                            addSkillsTemplate(historyForm);
                        }
                        break;
                    case "hobbies":
                        if(hobbies.length == 0){
                            addHobbiesTemplate(historyForm);
                        }
                        break;

                }
            }

        }, true);

        historyForm.querySelector('#new-position-add-button').addEventListener("click", (event) => {

            switch (historyForm.id) {
                case "work_experience":
                    addWorkExperticeTemplate(historyForm);
                    break;
                case "education":
                    addEducationTemplate(historyForm);
                    break;
                case "languages":
                    addLanguagesTemplate(historyForm);
                    break;
                case "skills":
                    addSkillsTemplate(historyForm);
                    break;
                case "hobbies":
                    addHobbiesTemplate(historyForm);
                    break;
            }

        }), true;

    }

}

function addWorkExperticeTemplate(historyForm) {

    let workElem = document.createElement('div');
    workElem.id = "hidden-content";
    workElem.innerHTML = work_element;
    historyForm.querySelector("#form-content").insertBefore(workElem, historyForm.querySelector('#new-position-add-button'));

    prepareEditor(workElem);

    let deleteButton = workElem.querySelector("#delete-button");
    deleteButton.addEventListener("click", () => {
        workElem.remove();
    });

}

function addMinimalizeJobExp(historyForm, id) {

    let index = jobs.findIndex(j => j.id === id);

    let minimalJob = document.createElement('div');
    minimalJob.id = "minimalized_content";

    minimalJob.innerHTML = minimilized_content_work;

    let tmp = historyForm.querySelector("#form-content").childNodes[index + 1];

    minimalJob.querySelector('#job-title').innerHTML = tmp.querySelector("#input-job-title").value;
    minimalJob.querySelector('#start-date').innerHTML = tmp.querySelector("#input-start-date").value;
    minimalJob.querySelector('#end-date').innerHTML = tmp.querySelector("#input-end-date").value;
    minimalJob.addEventListener("click", (event) => {

        if (event.target.nodeName == "IMG") {
            minimalJob.remove();
            jobs.splice(jobs.findIndex(j => j.id === id), 1);
        } else {
            expandMinimalizeJobExp(historyForm, id);
            minimalJob.remove();
        }
    });


    historyForm.querySelector("#form-content").removeChild(historyForm.querySelector('#form-content').childNodes[index + 1]);
    historyForm.querySelector("#form-content").insertBefore(minimalJob, historyForm.querySelector('#form-content').childNodes[index + 1]);
}

function expandMinimalizeJobExp(historyForm, id) {

    let index = jobs.findIndex(j => j.id === id);
    let workElem = jobs[index].data;
    historyForm.querySelector("#form-content").insertBefore(workElem, historyForm.querySelector('#form-content').childNodes[index + 1]);

    let deleteButton = workElem.querySelector("#delete-button");
    deleteButton.addEventListener("click", () => {
        jobs.splice(index, 1);
        workElem.remove();
    });

}


function addEducationTemplate(historyForm) {

    let eduElem = document.createElement('div');
    eduElem.id = "hidden-content";
    eduElem.innerHTML = education_element;
    historyForm.querySelector("#form-content").insertBefore(eduElem, historyForm.querySelector('#new-position-add-button'));

    prepareEditor(eduElem);

    let deleteButton = eduElem.querySelector("#delete-button");
    deleteButton.addEventListener("click", () => {
        eduElem.remove();
    });

}

function addMinimalizeEdu(historyForm, id) {

    let index = educations.findIndex(e => e.id === id);

    let minimalEdu = document.createElement('div');
    minimalEdu.id = "minimalized_content";

    minimalEdu.innerHTML = minimilized_content_education;

    let tmp = historyForm.querySelector("#form-content").childNodes[index + 1];

    minimalEdu.querySelector('#edu-title').innerHTML = tmp.querySelector("#input-edu-title").value;
    minimalEdu.querySelector('#start-date').innerHTML = tmp.querySelector("#input-start-date").value;
    minimalEdu.querySelector('#end-date').innerHTML = tmp.querySelector("#input-end-date").value;
    minimalEdu.addEventListener("click", (event) => {

        if (event.target.nodeName == "IMG") {
            minimalEdu.remove();
            educations.splice(educations.findIndex(e => e.id === id), 1);
        } else {
            expandMinimalizeEdu(historyForm, id);
            minimalEdu.remove();
        }
    });


    historyForm.querySelector("#form-content").removeChild(historyForm.querySelector('#form-content').childNodes[index + 1]);
    historyForm.querySelector("#form-content").insertBefore(minimalEdu, historyForm.querySelector('#form-content').childNodes[index + 1]);
}

function expandMinimalizeEdu(historyForm, id) {

    let index = educations.findIndex(e => e.id === id);
    let eduElem = educations[index].data;
    historyForm.querySelector("#form-content").insertBefore(eduElem, historyForm.querySelector('#form-content').childNodes[index + 1]);

    let deleteButton = eduElem.querySelector("#delete-button");
    deleteButton.addEventListener("click", () => {
        educations.splice(index, 1);
        eduElem.remove();
    });

}

function prepareEditor(historyForm) {

    let editors = historyForm.getElementsByClassName("editor");
    for (let editor of editors) {
        ClassicEditor
            .create(editor, {
                toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote']
            })
            .catch(error => {
                console.error(error);
            });
    }

}

function addLanguagesTemplate(historyForm) {

    let langElem = document.createElement('div');
    langElem.id = "hidden-content";
    langElem.innerHTML = languages_element;
    historyForm.querySelector("#form-content").insertBefore(langElem, historyForm.querySelector('#new-position-add-button'));

    let deleteButton = langElem.querySelector("#delete-button");
    deleteButton.addEventListener("click", () => {
        langElem.remove();
    });

}

function addMinimalizeLang(historyForm, id) {

    let index = languages.findIndex(l => l.id === id);

    let minimalLang = document.createElement('div');
    minimalLang.id = "minimalized_content";

    minimalLang.innerHTML = minimilized_content_languages;

    let tmp = historyForm.querySelector("#form-content").childNodes[index + 1];

    minimalLang.querySelector('#lang-title').innerHTML = tmp.querySelector("#input-lang-title").value;
    minimalLang.querySelector('#level').innerHTML = tmp.querySelector("#input-level").value;

    minimalLang.addEventListener("click", (event) => {

        if (event.target.nodeName == "IMG") {
            minimalLang.remove();
            languages.splice(languages.findIndex(l => l.id === id), 1);
        } else {
            expandMinimalizeLang(historyForm, id);
            minimalLang.remove();
        }
    });


    historyForm.querySelector("#form-content").removeChild(historyForm.querySelector('#form-content').childNodes[index + 1]);
    historyForm.querySelector("#form-content").insertBefore(minimalLang, historyForm.querySelector('#form-content').childNodes[index + 1]);
}

function expandMinimalizeLang(historyForm, id) {

    let index = languages.findIndex(l => l.id === id);
    let langElem = languages[index].data;
    historyForm.querySelector("#form-content").insertBefore(langElem, historyForm.querySelector('#form-content').childNodes[index + 1]);

    let deleteButton = langElem.querySelector("#delete-button");
    deleteButton.addEventListener("click", () => {
        languages.splice(index, 1);
        langElem.remove();
    });

}

function addSkillsTemplate(historyForm) {

    let skillElem = document.createElement('div');
    skillElem.id = "hidden-content";
    skillElem.innerHTML = skills_element;
    historyForm.querySelector("#form-content").insertBefore(skillElem, historyForm.querySelector('#new-position-add-button'));

    let deleteButton = skillElem.querySelector("#delete-button");
    deleteButton.addEventListener("click", () => {
        skillElem.remove();
    });

}

function addMinimalizeSkill(historyForm, id) {

    let index = skills.findIndex(s => s.id === id);

    let minimalSkill = document.createElement('div');
    minimalSkill.id = "minimalized_content";

    minimalSkill.innerHTML = minimilized_content_skills;

    let tmp = historyForm.querySelector("#form-content").childNodes[index + 1];

    minimalSkill.querySelector('#skill-title').innerHTML = tmp.querySelector("#input-skill-title").value;
    minimalSkill.querySelector('#level').innerHTML = tmp.querySelector("#input-level").value;

    minimalSkill.addEventListener("click", (event) => {

        if (event.target.nodeName == "IMG") {
            minimalSkill.remove();
            skills.splice(skills.findIndex(s => s.id === id), 1);
        } else {
            expandMinimalizeSkill(historyForm, id);
            minimalSkill.remove();
        }
    });


    historyForm.querySelector("#form-content").removeChild(historyForm.querySelector('#form-content').childNodes[index + 1]);
    historyForm.querySelector("#form-content").insertBefore(minimalSkill, historyForm.querySelector('#form-content').childNodes[index + 1]);
}

function expandMinimalizeSkill(historyForm, id) {

    let index = skills.findIndex(s => s.id === id);
    let skillElem = skills[index].data;
    historyForm.querySelector("#form-content").insertBefore(skillElem, historyForm.querySelector('#form-content').childNodes[index + 1]);

    let deleteButton = skillElem.querySelector("#delete-button");
    deleteButton.addEventListener("click", () => {
        skills.splice(index, 1);
        skillElem.remove();
    });

}


function addHobbiesTemplate(historyForm) {

    let hobbyElem = document.createElement('div');
    hobbyElem.id = "hidden-content";
    hobbyElem.innerHTML = hobbies_element;
    historyForm.querySelector("#form-content").insertBefore(hobbyElem, historyForm.querySelector('#new-position-add-button'));

    let deleteButton = hobbyElem.querySelector("#delete-button");
    deleteButton.addEventListener("click", () => {
        hobbyElem.remove();
    });

}

function addMinimalizeHobby(historyForm, id) {

    let index = hobbies.findIndex(h => h.id === id);

    let minimalHobby = document.createElement('div');
    minimalHobby.id = "minimalized_content";

    minimalHobby.innerHTML = minimilized_content_hobbies;

    let tmp = historyForm.querySelector("#form-content").childNodes[index + 1];

    minimalHobby.querySelector('#hobby-title').innerHTML = tmp.querySelector("#input-hobby-title").value;

    minimalHobby.addEventListener("click", (event) => {

        if (event.target.nodeName == "IMG") {
            minimalHobby.remove();
            hobbies.splice(hobbies.findIndex(h => h.id === id), 1);
        } else {
            expandMinimalizeHobby(historyForm, id);
            minimalHobby.remove();
        }
    });


    historyForm.querySelector("#form-content").removeChild(historyForm.querySelector('#form-content').childNodes[index + 1]);
    historyForm.querySelector("#form-content").insertBefore(minimalHobby, historyForm.querySelector('#form-content').childNodes[index + 1]);
}

function expandMinimalizeHobby(historyForm, id) {

    let index = hobbies.findIndex(h => h.id === id);
    let HobbyElem = hobbies[index].data;
    historyForm.querySelector("#form-content").insertBefore(HobbyElem, historyForm.querySelector('#form-content').childNodes[index + 1]);

    let deleteButton = HobbyElem.querySelector("#delete-button");
    deleteButton.addEventListener("click", () => {
        hobbies.splice(index, 1);
        HobbyElem.remove();
    });

}


let work_element = `
<hr>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label>Nazwa zawodu</label>
            <input type="text" placeholder="np. kierownik sprzedaży" name="workName[]" class="form-control" id="input-job-title">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>Miasto / miejscowość</label>
            <input type="text" autocomplete="off" name="workCity[]" placeholder="np. Warszawa"
                class="form-control">
        </div>
    </div>
</div>

<div class="form-group">
    <label>Pracodawca</label>
    <input type="text" placeholder="np. PwC" name="workEmp[]" class="form-control">
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label>Data rozpoczęcia</label>
            <input type="date" autocomplete="off" name="workStart[]" class="form-control" id="input-start-date">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>Data zakończenia</label>
            <input type="date" name="workEnd[]" class="form-control" id="input-end-date">
        </div>
    </div>
</div>

<div class="form-group">
    <label>Opis</label>
    <textarea id="editor" class="editor" name="workAbout[]"></textarea>
</div>

<div class="form-group text-right">
<button type="button" class="btn btn-danger" id="delete-button">Usuń</button>
</div>

`;

let minimilized_content_work = `
<hr>
<div class="row align-items-center">
    <div class="col-10 ml-3">
        <label class="row content-lable" id="job-title">BLA Blas</label>
        <div class="row">
            <label id="start-date">23.10.1995</label><label class="mx-1">-</label><label id="end-date">23.10.2020</label>
        </div>
    </div>
    <div class="col">
        <img src="/img/delete.svg" class="content-additional-image" id="delete-min-button">
    </div>
</div>
`;

let education_element = `
<hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Stopień / poziom</label>
                            <input type="text" placeholder="np. licencjat" name="eduDeg[]" class="form-control" id="input-edu-title">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Miasto / miejscowość</label>
                            <input type="text" autocomplete="off" name="eduCity[]" placeholder="np. Warszawa"
                                class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Szkoła / uczelnia</label>
                    <input type="text" placeholder="np. Politechnika Białostocka" name="eduSchool[]" class="form-control">
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Data rozpoczęcia</label>
                            <input type="date" autocomplete="off" name="eduStart[]" class="form-control" id="input-start-date">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Data zakończenia</label>
                            <input type="date" name="eduEnd[]" class="form-control" id="input-end-date">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Opis</label>
                    <textarea id="editor" class="editor" name="eduAbout[]"></textarea>
                </div>
                <div class="form-group text-right">
<button type="button" class="btn btn-danger" id="delete-button">Usuń</button>
</div>
`;

let minimilized_content_education = `
<hr>
<div class="row align-items-center">
    <div class="col-10 ml-3">
        <label class="row content-lable" id="edu-title">BLA Blas</label>
        <div class="row">
            <label id="start-date">23.10.1995</label><label class="mx-1">-</label><label id="end-date">23.10.2020</label>
        </div>
    </div>
    <div class="col">
        <img src="/img/delete.svg" class="content-additional-image" id="delete-min-button">
    </div>
</div>
`;

let languages_element = `
<hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Język</label>
                            <input type="text" placeholder="np. hiszpański" name="langName[]" class="form-control" id="input-lang-title">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Poziom</label>
                            <select name="langDeg[][]" class="custom-select" id="input-level" title="Wybierz język">
                                <option disabled selected>Wybierz</option>
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="B1">B1</option>
                                <option value="B2">B2</option>
                                <option value="C1">C1</option>
                                <option value="C2">C2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group text-right">
                <button type="button" class="btn btn-danger" id="delete-button">Usuń</button>
                </div>
`;


let minimilized_content_languages = `
<hr>
<div class="row align-items-center">
    <div class="col-10 ml-3">
        <label class="row content-lable" id="lang-title">BLA Blas</label>
        <div class="row">
            <label id="level">23.10.1995</label>
        </div>
    </div>
    <div class="col">
        <img src="/img/delete.svg" class="content-additional-image" id="delete-min-button">
    </div>
</div>
`;

let skills_element = `
<hr>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label>Umiejętność</label>
            <input type="text" placeholder="np. obsługa Microsoft Word" name="skillName[]" class="form-control" id="input-skill-title">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>Poziom</label>
            <select class="custom-select" id="input-level" name="skillDeg[][]">
                <option disabled selected>Wybierz poziom</option>
                <option value="Zaawansowany">Zaawansowany</option>
                <option value="Doświadczony">Doświadczony</option>
                <option value="Wprawiony">Wprawiony</option>
                <option value="Początkujący">Początkujący</option>
                <option value="Nowicjusz">Nowicjusz</option>
            </select>
        </div>
    </div>
</div>
<div class="form-group text-right">
<button type="button" class="btn btn-danger" id="delete-button">Usuń</button>
</div>
`;

let minimilized_content_skills = `
<hr>
<div class="row align-items-center">
    <div class="col-10 ml-3">
        <label class="row content-lable" id="skill-title">BLA Blas</label>
        <div class="row">
            <label id="level">23.10.1995</label>
        </div>
    </div>
    <div class="col">
        <img src="/img/delete.svg" class="content-additional-image" id="delete-min-button">
    </div>
</div>
`;

let hobbies_element = `
<hr>

<div class="form-group">
    <label>Hobby</label>
    <input type="text" placeholder="np. wędrówki" name="hobbyName[]" class="form-control" id="input-hobby-title">
</div>
<div class="form-group text-right">
<button type="button" class="btn btn-danger" id="delete-button">Usuń</button>
</div>
`;

let minimilized_content_hobbies = `
<hr>
<div class="row align-items-center">
    <div class="col-10 ml-3">
        <label class="row content-lable" id="hobby-title">BLA Blas</label>
    </div>
    <div class="col">
        <img src="/img/delete.svg" class="content-additional-image" id="delete-min-button">
    </div>
</div>
`;