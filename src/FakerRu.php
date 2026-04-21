<?php

namespace persone16\FakerRussianPhp;

class FakerRu
{
    /**
     * Просто текст
     */
    public function text(?int $length = null): string
    {
        $texts = [
            'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.',
            'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum dolor sit amet..", происходит от одной из строк в разделе 1.10.32',
            'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
            'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.'
        ];

        $randNumber = mt_rand(0, 3);
        $result = $texts[$randNumber];

        return !empty($length) ? mb_str_split($result, $length)[0] : $result;
    }

    /**
     * Имена людей по полам
     */
    public function firstname($gender = 'female'): string
    {
        $male = [
            'Михаил',
            'Александр',
            'Артём',
            'Матвей',
            'Тимофей',
            'Иван',
            'Максим',
            'Дмитрий',
            'Марк',
            'Лев',
            'Даниил',
            'Егор',
            'Кирилл',
            'Андрей',
            'Николай',
            'Сергей',
            'Илья',
            'Роман',
            'Владимир',
            'Алексей',
            'Арсений',
            'Фёдор',
            'Георгий',
            'Константин',
            'Павел',
            'Глеб',
            'Денис',
            'Степан',
            'Владислав',
            'Захар'
        ];

        $female = [
            'София',
            'Ева',
            'Анна',
            'Мария',
            'Варвара',
            'Виктория',
            'Василиса',
            'Алиса',
            'Екатерина',
            'Полина',
            'Дарья',
            'Елизавета',
            'Александра',
            'Арина',
            'Вероника',
            'Елена',
            'Ксения',
            'Милана',
            'Ольга',
            'Татьяна',
            'Ульяна',
            'Диана',
            'Кира',
            'Валерия',
            'Ирина',
            'Светлана',
            'Юлия',
            'Наталья',
            'Маргарита',
            'Анастасия'
        ];

        $texts = $gender === 'male' ? $male : $female;

        $randNumber = mt_rand(0, 29);
        $result = $texts[$randNumber];

        return !empty($length) ? mb_str_split($result, $length)[0] : $result;
    }

    /**
     * Фамилии людей по полам
     */
    public function lastname($gender = 'female'): string
    {
        $male = [
            'Иванов',
            'Петров',
            'Смирнов',
            'Кузнецов',
            'Попов',
            'Васильев',
            'Михайлов',
            'Новиков',
            'Соколов',
            'Фёдоров',
            'Морозов',
            'Волков',
            'Алексеев',
            'Лебедев',
            'Семенов',
            'Егоров',
            'Павлов',
            'Козлов',
            'Степанов',
            'Николаев',
            'Орлов',
            'Андреев',
            'Макаров',
            'Никитин',
            'Захаров',
            'Зайцев',
            'Соловьёв',
            'Борисов',
            'Яковлев',
            'Григорьев'
        ];

        $female = [
            'Иванова',
            'Петрова',
            'Смирнова',
            'Кузнецова',
            'Попова',
            'Васильева',
            'Михайлова',
            'Новикова',
            'Соколова',
            'Фёдорова',
            'Морозова',
            'Волкова',
            'Алексеева',
            'Лебедева',
            'Семенова',
            'Егорова',
            'Павлова',
            'Козлова',
            'Степанова',
            'Николаева',
            'Орлова',
            'Андреева',
            'Макарова',
            'Никитина',
            'Захарова',
            'Зайцева',
            'Соловьёва',
            'Борисова',
            'Яковлева',
            'Григорьева'
        ];

        $texts = $gender === 'male' ? $male : $female;

        $randNumber = mt_rand(0, 29);
        $result = $texts[$randNumber];

        return !empty($length) ? mb_str_split($result, $length)[0] : $result;
    }

    /**
     * Отчества людей по полам
     */
    public function patronym($gender = 'female'): string
    {
        $male = [
            'Иванович',
            'Петрович',
            'Сергеевич',
            'Владимирович',
            'Александрович',
            'Николаевич',
            'Михайлович',
            'Дмитриевич',
            'Георгиевич',
            'Борисович',
            'Алексеевич',
            'Андреевич',
            'Евгеньевич',
            'Олегович',
            'Павлович',
            'Степанович',
            'Юрьевич',
            'Васильевич',
            'Викторович',
            'Игоревич',
            'Константинович',
            'Леонидович',
            'Максимович',
            'Романович',
            'Станиславович',
            'Федорович',
            'Эдуардович',
            'Яковлевич',
            'Тимофеевич',
            'Геннадьевич'
        ];

        $female = [
            'Ивановна',
            'Петровна',
            'Сергеевна',
            'Владимировна',
            'Александровна',
            'Николаевна',
            'Михайловна',
            'Дмитриевна',
            'Георгиевна',
            'Борисовна',
            'Алексеевна',
            'Андреевна',
            'Евгеньевна',
            'Олеговна',
            'Павловна',
            'Степановна',
            'Юрьевна',
            'Васильевна',
            'Викторовна',
            'Игоревна',
            'Константиновна',
            'Леонидовна',
            'Максимовна',
            'Романовна',
            'Станиславовна',
            'Федоровна',
            'Эдуардовна',
            'Яковлевна',
            'Тимофеевна',
            'Геннадьевна'
        ];

        $texts = $gender === 'male' ? $male : $female;

        $randNumber = mt_rand(0, 29);
        $result = $texts[$randNumber];

        return !empty($length) ? mb_str_split($result, $length)[0] : $result;
    }

    /**
     * Крупные города РФ
     */
    public function city(): string
    {
        $city = [
            'Москва',
            'Санкт-Петербург',
            'Новосибирск',
            'Екатеринбург',
            'Казань',
            'Нижний Новгород',
            'Челябинск',
            'Самара',
            'Омск',
            'Ростов-на-Дону',
            'Уфа',
            'Красноярск',
            'Пермь',
            'Воронеж',
            'Волгоград',
            'Краснодар',
            'Саратов',
            'Тюмень',
            'Тольятти',
            'Ижевск'
        ];

        $randNumber = mt_rand(0, 19);
        $result = $city[$randNumber];

        return !empty($length) ? mb_str_split($result, $length)[0] : $result;
    }

    
    public function expertShortDescription(string $mainFilter, string $subFilter, string $project = 'relations'): ?string
    {
        $result = null;

        if ($project === 'veterinary') {
            $result = (new FakeVeterinars())
                ->expertShortDescriptionByGender($mainFilter, $subFilter);
        } else {
            $result = (new FakeRelations())
                ->expertShortDescription($mainFilter, $subFilter);
        }

        return $result;
    }

    public function expertDescription(string $mainFilter, string $subFilter, string $project = 'relations'): ?string
    {
        $result = null;

        if ($project === 'veterinary') {
            $result = (new FakeVeterinars())
                ->expertDescriptionByGender($mainFilter, $subFilter);
        } else {
            $result = (new FakeRelations())
                ->expertDescription($mainFilter, $subFilter);
        }

        return $result;
    }


    public function titleQuestion(?int $length = null, string $project = 'relations'): string
    {
        if ($project === 'veterinary') {
            return (new FakeVeterinars())
                ->titleQuestion($length);
        } else {
            return (new FakeRelations())
                ->titleQuestion($length);
        }
    }

    public function descriptionQuestion(?int $length = null, string $project = 'relations'): string
    {
        if ($project === 'veterinary') {
            return (new FakeVeterinars())
                ->descriptionQuestion($length);
        } else {
            return (new FakeRelations())
                ->descriptionQuestion($length);
        }
    }

    public function answerQuestion(?int $length = null, string $project = 'relations'): string
    {
        if ($project === 'veterinary') {
            return (new FakeVeterinars())
                ->answerQuestion($length);
        } else {
            return (new FakeRelations())
                ->answerQuestion($length);
        }
    }

    public function commentQuestion(?int $length = null, string $project = 'relations'): string
    {
        if ($project === 'veterinary') {
            return (new FakeVeterinars())
                ->commentQuestion($length);
        } else {
            return (new FakeRelations())
                ->commentQuestion($length);
        }
    }


    public function smartQuestions(string $project = 'relations'): array
    {
        if ($project === 'veterinary') {
            return (new FakeVeterinars())
                ->smartQuestions();
        } else {
            return (new FakeRelations())
                ->smartQuestions();
        }
    }

    public function smartTitleQuestion(string $direction, string $targetAudience, string $project = 'relations'): ?string
    {
        if ($project === 'veterinary') {
            return (new FakeVeterinars())
                ->smartTitleQuestion($direction, $targetAudience);
        } else {
            return (new FakeRelations())
                ->smartTitleQuestion($direction, $targetAudience);
        }
    }

    public function smartDescriptionQuestion(string $direction, string $targetAudience, string $project = 'relations'): ?string
    {
        if ($project === 'veterinary') {
            return (new FakeVeterinars())
                ->smartDescriptionQuestion($direction, $targetAudience);
        } else {
            return (new FakeRelations())
                ->smartDescriptionQuestion($direction, $targetAudience);
        }
    }

    public function smartAnswerQuestion(string $direction, string $targetAudience, int $index, string $project = 'relations'): ?string
    {
        if ($project === 'veterinary') {
            return (new FakeVeterinars())
                ->smartAnswerQuestion($direction, $targetAudience, $index);
        } else {
            return (new FakeRelations())
                ->smartAnswerQuestion($direction, $targetAudience, $index);
        }
    }

    public function smartAnswerThreadQuestion(string $direction, string $targetAudience, int $index, string $project = 'relations'): ?array
    {
        if ($project === 'veterinary') {
            return (new FakeVeterinars())
                ->smartAnswerThreadQuestion($direction, $targetAudience, $index);
        } else {
            return (new FakeRelations())
                ->smartAnswerThreadQuestion($direction, $targetAudience, $index);
        }
    }

    public function smartCommentQuestion(string $direction, string $targetAudience, int $index, string $project = 'relations'): ?string
    {
        if ($project === 'veterinary') {
            return (new FakeVeterinars())
                ->smartCommentQuestion($direction, $targetAudience, $index);
        } else {
            return (new FakeRelations())
                ->smartCommentQuestion($direction, $targetAudience, $index);
        }
    }
}