-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 27 2020 г., 10:32
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`) VALUES
(1, 'Электронные сигареты', 'img/category-1'),
(2, 'Трубки', 'img/category-2'),
(3, 'Жидкости для заправки', 'img/category-3'),
(4, 'Аккумуляторы и автомайзеры', 'img/category-4'),
(5, 'Картриджи', 'img/category-5'),
(6, 'Зарядные устройства', 'img/category-6'),
(7, 'Аксессуары', 'img/category-7'),
(8, 'Подарочные наборы', 'img/category-8');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `announce` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `announce`, `description`) VALUES
(1, 'Власти рекомендовали регионам вернуть табак в товары первой необходимости\r\n\r\n', '2020-07-23 11:05:48', 'Фактическое расширение списка товаров первой необходимости путем дачи рекомендации властям регионов объясняется стремлением избежать дефицита сигарет. ', 'Фактическое расширение списка товаров первой необходимости путем дачи рекомендации властям регионов объясняется стремлением избежать дефицита сигарет. Вице-премьер Абрамченко также рекомендовала вернуть в список автозапчасти\r\nСигареты и другая табачная продукция, а также запчасти к автомобилям могут вернуться в список товаров первой необходимости, производство и продажа которых разрешены в период введенных указом президента России нерабочих дней. Признать табак и автозапчасти такими товарами рекомендовала руководителям регионов России вице-премьер Виктория Абрамченко. Копия документа, датированного 2 апреля, есть в распоряжении РБК, представитель вице-премьера подтвердил подлинность документа.\r\n\r\nВ первоначальной версии списка товаров первой необходимости, утвержденного распоряжением премьер-министра Михаила Мишустина от 27 марта, и табачная продукция, и автозапчасти, в том числе шины, фигурировали, однако уже через день исчезли.\r\n'),
(2, 'Сенаторы одобрили закон о приравнивании вейпов и кальянов к сигаретам', '2020-07-01 15:10:29', 'Совет Федерации одобрил закон, который распространяет антитабачное законодательство на вейпы', 'Совет Федерации одобрил закон, который распространяет антитабачное законодательство на вейпы, кальяны и снюсы. Данное решение приняли на заседании верхней палаты парламента.\r\n\r\nДокумент подразумевает изменения в антитабачном законодательстве. Таким образом, административная ответственность за курение табака на запрещенных территориях будет распространяться на вейпы, снюсы и кальяны. Таким образом, штрафные санкции также будут распространяться на перечисленные виды изделий.\r\n\r\nКроме того, аналогичное изменение касается и вовлечения несовершеннолетних в употребление данных видов курительной продукции. Также вейпы, снюсы и кальяны должны будут соответствовать антитабачному законодательству в отношении их демонстрации в аудиовизуальных произведениях.\r\n\r\nПомимо этого, проектом предусмотрен запрет на употребление курительной продукции в коммунальных квартирах. Кроме того, планируется оказание медицинской помощи, направленной на прекращение курения табака или иной никотинсодержащей продукции.\r\n'),
(3, 'Выкурят из кафе', '2020-07-14 18:29:13', 'Электронные сигареты и кальяны приравняли к табаку', 'Через три месяца кальяны должны исчезнуть из российских ресторанов, в них также запретят курить электронные сигареты. Такой закон одобрил в пятницу Совет Федерации под занавес весенней сессии.\r\nДокумент был внесен группой сенаторов и депутатов более трех лет назад и, как отметила вице-спикер СФ Галина Карелова, \"шел очень сложно\". Один из авторов закона, первый зампред комитета по социальной политике Валерий Рязанский, напомнил, что в Госдуму было направлено порядка 15 проектов об ограничении использования кальянов, вейпов, электронных сигарет и прочего. \"Это говорит о том, что тема серьезно взволновала страну, особенно в части использования новых, современных методов доставки никотина в организм. И то, что появилось на рынке достаточно большое количество таких изделий, требовало государственного решения\", - сказал он.'),
(4, 'Никотиносодержащие электронные сигареты - наиболее эффективные средства для прекращения курения', '2020-06-03 16:46:16', 'Доброго времени уважаемые вэйперы и ценители вкусного электронного пара. Очередное исследование, которое хоть как-то показывает всему мировому сообществу, что электронные сигареты – лучший способ бросить курить...', 'Доброго времени уважаемые вэйперы и ценители вкусного электронного пара. Очередное исследование, которое хоть как-то показывает всему мировому сообществу, что электронные сигареты – лучший способ бросить курить было проведено совсем недавно. На этот раз исследователями из Университета Окленда, было доказано, что из всех никотинозаменяющих средств для борьбы с курением, электронные сигареты наиболее эффективны для того, чтобы помочь курильщикам успешно бросить курить. Доцент д-р Натали Уолкер и профессор Крис Буллен из Оклендского университета собрали результаты 1124 участников, 40% из которых были женщины. В исследовании в Новой Зеландии за 2017/18 годы было выявлено больше курящих женщин по сравнению с мужчинами, поэтому было обнадеживающе видеть, как много женщин участвуют в испытании в попытке бросить курить».\r\n'),
(5, 'Аккумуляторы для электронных сигарет: подробный гайд по выбору', '2020-05-21 08:31:12', 'Немало вейпов для новичков содержат встроенные несъемные источники питания. Но приходит момент, когда парильщик переходит на более серьезные девайсы, работающих от съемных АКБ...', 'Немало вейпов для новичков содержат встроенные несъемные источники питания. Но приходит момент, когда парильщик переходит на более серьезные девайсы, работающих от съемных АКБ (аккумуляторных батарей) различных форматов. И тут возникает закономерный вопрос: какие аккумуляторы выбрать для того или иного устройства. На специализированных форумах нередко все забито непонятными терминами, что иногда хочется просто забиться в угол со старенькой егошкой и не высовываться. Наш вейп-шоп, заботясь о своих покупателях, решил все расставить по полочкам и «русским языком» объяснить, начинающему или не очень вейперу, какие именно АКБ выбрать.\r\n\r\nВиды аккумуляторов\r\nПрежде чем начать подбирать идеальный сетап, необходимо разобраться какими вообще бывают АКБ для электронных парогенераторов. Классификацию аккумуляторов стоит начать с формата и химического состава. \r\n\r\nФормат или размер АКБ\r\nФорматом называется определенный стандарт размеров аккумуляторов. Для некоторых типов батарей, например гальванических (обыкновенные пальчиковые) используются буквенные обозначения — АА, ААА и прочие. АКБ предназначенные для использования в vape-девайсах входят в другую группу, имеющую обозначения формата «XXYYY», где «ХХ» это диаметр источника питания в миллиметрах, а «YYY» это его высота, также в миллиметрах. То есть самый распространенный тип аккумуляторов 18650 имеет 18мм в диаметре и 6,5см в высоту. Аналогично можно разобрать и остальных представителей этого ряда — 14650, 20700, 21700 и так далее.'),
(6, 'Общественные места и кафе станут недоступны любителям вейпа и кальяна', '2020-07-24 09:10:16', 'Вейпы и кальяны будет запрещено курить на терриории учебных заведений, медучреждений, на лестничных площадках...', 'вейпы и кальяны будет запрещено курить на территории учебных заведений, медучреждений, на лестничных площадках, пляжах, в общежитиях и рабочих зонах. Отдельным пунктом их запретили в барах и ресторанах.\r\n\r\nЗаконопроект содержит и размеры штрафов для нарушителей. За курение в неположенном месте – от 500 до 1 500 рублей, а за курение на детской площадке от 2 до 3 тыс. руб. Под запрет, кстати, попадут и реклама электронных сигарет и кальянов, и демонстрация процесса курения в кинофильмах.\r\n\r\nЗаконопроект осенью рассмотрят в Совете Федерации, и только после этого он попадёт на подпись президенту.'),
(7, 'В ресторанах Подмосковья разрешат курение кальянов с 1 сентября', '2020-07-26 17:22:23', 'В барах и ресторанах Московской области с 1 сентября вновь разрешат курение кальянов. Соответствующее постановление подписал в четверг глава региона Андрей Воробьев.', 'Согласно документу, запрет на «курение кальянов в ресторанах, барах, кафе и иных аналогичных объектах в период повышенной готовности для органов управления и сил Московской областной системы предупреждения и ликвидации чрезвычайных ситуаций» будет действовать до конца августа.Также отмечается, что с 1 августа в регионе возобновится реализация проекта «Активное долголетие», будут отменены все ограничения на водный транспорт, разрешена деятельность самостоятельных экскурсоводов. Кроме того, возобновится образовательная деятельность (общее, профессиональное, высшее образование), деятельность по организации и проведению азартных игр, лотерей; будет разрешено посещение букмекерских контор, тотализаторов.\r\n\r\nВместе с тем в регионе до 9 августа из-за распространения коронавируса сохраняется режим самоизоляции для людей старше 65 лет, а также лиц с хроническими заболеваниями. Исключения допускаются только для руководителей и сотрудников предприятий и органов власти, чье нахождение на рабочем месте является критически важным.');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `main_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `image`, `main_category`) VALUES
(1, 'Курительная трубка Armellini - Digma 501', 'Трубка Armellini - Digma № 501\r\n\r\nМатериал: Бриар\r\nМундштук: Акрил\r\nФильтр:     Нет\r\n\r\nДлина трубки: 12,8 см\r\nВысота чаши:   4,9 см\r\n\r\nТабачная камера: (Некарбонизированна) \r\n                 Глубина: 4,2 см\r\n                Диаметр: 1,9 см\r\n\r\nHand made / Ручная работа\r\n\r\nВес:   40.8 гр.\r\n\r\nСтрана производитель:  Италия   ', 8820, 'img/product/Armellini - Digma.png', 2),
(2, 'Курительная трубка Armellini - Lisce ', 'Трубка Armellini - Lisce № 402\r\n\r\nМатериал: Бриар\r\nМундштук: Эбонит\r\nФильтр:     Нет\r\n\r\nДлина трубки: 13.8 см\r\nВысота чаши:   5.1 см\r\n\r\nТабачная камера: (Некарбонизированна) \r\n                 Глубина: 4.2 см\r\n                Диаметр: 1,8 см\r\n\r\nHand made / Ручная работа\r\n\r\nВес:   41.4 гр.\r\n\r\nСтрана производитель:  Италия    ', 7710, 'img/product/Armellini - Lisce.png', 2),
(3, 'Курительная трубка Armellini - Pipa Fatta a Mano 920 (без фильтра)', 'Трубка Armellini - Pipa Fatta a Mano № 920\r\n\r\nМатериал: Бриар\r\nМундштук: Акрил\r\nФильтр:     Нет\r\n\r\nДлина трубки: 16,5 см\r\nВысота чаши:   4,7 см\r\n\r\nТабачная камера: (Некарбонизированна)\r\n                 Глубина: 4 см\r\n                Диаметр: 2,3 - 1,8 см (Конус) \r\n\r\nHand made / Ручная работа\r\n\r\nВес:   66,7\r\n\r\nСтрана производитель:  Италия    ', 7760, 'img/product/Armellini - Pipa Fatta.png', 2),
(8, 'Курительная трубка Ardor Meteora', 'Трубка Ardor Meteora - 004\r\n\r\nМатериал: Бриар\r\nМундштук: Акрил\r\nКольцо:    Акрил\r\nФильтр:     Нет\r\n\r\nДлина трубки: 15,1 см\r\nВысота чаши:    5,1 см\r\n\r\nТабачная камера: (Некарбонизированна)\r\n                 Глубина: 4,1 см\r\n                Диаметр: 2 см\r\n\r\nHand made / Ручная работа\r\n\r\nВес:   57,4 гр.\r\n\r\nСтрана производитель:  Италия    ', 12420, 'img/product/Ardor - Meteora.png', 2),
(9, 'Ashton - Brindle', 'Трубка Ashton Brindle XX  (Эштон) Bent - 1403\r\n\r\nМатериал:  Бриар\r\nМундштук:  Камберленд  \r\nФильтр:     Нет\r\n\r\nДлина трубки: 13.4 см\r\nВысота чаши:   4.6 см\r\n\r\nТабачная камера: (Карбонизированна)\r\n                Глубина:   3.9 см\r\n              Диаметр:   1,95 см\r\n\r\nHand made / Ручная работа\r\n\r\nВес трубки: 40 гp.\r\n\r\nСтрана производства:  Великобритания (England)    ', 12568, 'img/product/Ashton - Brindle.png', 2),
(10, ' Peterson Aran Nickel', 'Трубка Peterson Aran 01\r\n\r\nМатериал:  Бриар\r\nМундштук:  Эбонит\r\nФильтр:      9 мм\r\n\r\nДлина трубки:  14.1 см\r\nВысота чаши:    4.4 см \r\n\r\nТабачная камера: (Карбонизированна)\r\n                Глубина:   3,9 см\r\n              Диаметр:   2 см\r\n\r\nВес:  52.4 гр\r\n\r\nСтрана производитель:    Ирландия    ', 6275, 'img/product/Peterson Aran.png', 2),
(11, 'Курительная трубка Castello', 'Трубка Castello - Castello КК 05\r\n\r\nМатериал:  Бриар\r\nМундштук:  Акрил\r\nФильтр:     Нет\r\n\r\nДлина трубки:  12 см\r\nВысота чаши:   4.5 см\r\n\r\nТабачная камера: (Некарбонизированна)\r\n                Глубина: 3.7 см\r\n              Диаметр: 2.1 см\r\n\r\nHand made / Ручная работа\r\n\r\nВес трубки: 51 гp.\r\n\r\nСтрана производитель: Италия    ', 21700, 'img/product/Castello.png', 2),
(12, 'Курительная трубка Golden Gate', 'Трубка Golden Gate 300 Billiard - 23 Bark\r\n\r\nМатериал: Бриар\r\nМундштук: Эбонит\r\nФильтр:     Нет\r\n\r\nДлина трубки: 13.5 см\r\nВысота чаши:   4,7 см\r\n\r\nТабачная камера: (Карбонизированна)\r\n                Глубина:   4 см\r\n               Диаметр:  2 см\r\n\r\nВес:  27 гр', 2440, 'img/product/Golden Gate.png', 2),
(13, 'Курительная трубка Neerup Basic Series Group 2 - 1423 (фильтр 9 мм)', 'Трубка Neerup Basic Series Group 2 - 1423\r\n\r\nМатериал:  Бриар\r\nМундштук:  Акрил\r\nФильтр:     9 мм\r\n\r\nДлина трубки: 12,9 см\r\nВысота чаши:   5,6 см\r\n\r\nТабачная камера: (Карбонизированна)\r\n                Глубина: 4,5 см\r\n              Диаметр:  2.3 см\r\n\r\nHand made / Ручная работа\r\n\r\nВес трубки: 60,3 гp.\r\n\r\nСтрана производитель: Дания (Denmark)    ', 5790, 'img/product/Neerup - Basic.jpg', 2),
(14, 'Курительная трубка Eriksen Keystone Filter Pipe - 002 (без фильтра)', '\r\nТрубки Eriksen Keystone Filter Pipe должны обеспечить сухое и прохладное курение даже самому неопытному курильщику трубки. Краеугольным камнем (Keystone) в решении этой непростой задачи стала дополнительная камера, расположенная под бриаровой чашей. Она может заполняться любыми абсорбирующими гранулятами, в частности оригинальным Nording Keystone, которые поглощают негативные последствия ускоренного или неравномерного темпа курения. После курения пластиковый чубук с нижней камерой можно просто промыть под струёй воды.', 1930, 'img/product/Eriksen - Keystone.jpg', 2),
(15, 'Курительная трубка Winslow', 'Трубка Winslow 2010   (143 трубка из 190)\r\n\r\nМатериал:  Бриар\r\nМундштук:  Акрил\r\nКольцо:  Серебро 925 пробы\r\nФильтр:    9 мм\r\n\r\nДлина трубки:  14,2 см\r\nВысота чаши:    4,9 см\r\n\r\nТабачная камера: (Карбонизированна)\r\n                 Глубина:  3,4 см\r\n                Диаметр:  2,1 - 1,9 см\r\n\r\nHand made / Ручная работа\r\n\r\nВес:   76,4 гр\r\n\r\nСтрана производитель: Дания (Denmark)   ', 31230, 'img/product/Winslow.png', 2),
(16, 'Курительная трубка Ewa Artois Natural ', 'Трубка Ewa Artois Natural 271\r\n\r\nМатериал: Бриар\r\nМундштук: Акрил\r\nФильтр:     9 мм\r\n\r\nДлина трубки: 12,4 см\r\nВысота чаши:   3,9 см\r\n\r\nТабачная камера: (Карбонизированна) \r\n                 Глубина: 3 см\r\n                Диаметр: 1,9 см\r\n\r\nВес:   49,6 г\r\n\r\nСтрана производитель:  Франция    ', 2400, 'img/product/Ewa Artois Natural.png', 2),
(17, 'Трубочные фильтры Peterson 9 мм угольный - 150 шт', 'Угольные фильтры для трубок фирмы Peterson 9мм.\r\n\r\nПроизводство Германия.\r\n\r\nВ упаковке 150 штук,\r\n\r\nКерамика с двух сторон.    ', 1200, 'img/ptoduct/peterson-filter.jpg', 7),
(18, 'Увлажнитель для табака - 010-439', 'Помогает увлажнять табак. Рекомендуется использовать с дистиллированной водой.\r\n\r\nИнструкция к использованию:\r\n\r\nОпустите в емкость с водой, дать некоторое время пропитаться,вынуть, встряхнуть излишки, положить в емкость с табаком.\r\n\r\nСо временем, по мере надобности процедуру повторить.\r\n\r\nДиаметр 28,5 мм.\r\n\r\nМатериал: Коалиновая глина в алюминиевом корпусе\r\n\r\nПроизводитель: Гон-Конг\r\n\r\nЦена указана за 1 увлажнитель', 90, 'img/product/Humidifier.jpg', 7),
(19, 'Набор Smoant Knight 80 Pod Kit', '\r\nSmoant Knight 80 Mod Pod Kit это очередной девайс компании, подарившей нам Пасито. На этот раз перед нами устройство в формате популярных ныне \"подмодов\", которые сочетают в себе плюсы компактных подов и больших полноценных девайсов. Работает данный девайс на сменных аккумуляторах, Knight 80 Pod сможет порадовать вейперов приличным функционалом, фирменным дизайном и картриджем на сменных испарителях, к тому же, к нему подходят испарители своего идейного предшественника.', 1999, 'img/product/electro.jpg', 1),
(20, 'Стартовый набор SMOK NOVO 2 kit', 'Устройство стало экономичней: потребление в режиме ожидания, раньше не превышавшее 200 мкА, сейчас находится в границах 20-50 мкА. Ранняя версия развивала мощность 10-16 Вт, а Novo 2 Pod выдает на испаритель 6-25 Вт. И самое главное изменение – емкость аккумулятора увеличена почти вдвое и составляет 800 мАч. Индикатор показывает уровень заряда более точно.', 1700, 'img/product/electro2.jpg', 1),
(21, 'Жидкость Mad Hatter I Love Taffy 100мл', 'Жидкость Mad Hatter передаст вам вкус, аромат и удовольствие от ее курения.', 1100, 'img/product/taffy.png', 3),
(22, 'Картридж Eleaf Tance 1.2ohm POD\r\n', 'Картридж.Расходный материал для вейпа.', 220, 'img/product/картридж.png', 5),
(23, 'Аккумулятор AWT 20700', 'Аккумуляторная батарея подойдет практически на любую электронную сигарету. Обьем батареи составляет 4200mah', 750, 'img/product/Battery.jpg', 4),
(25, 'Зарядное устройство EFEST LUSH Q2', 'Зарядное устройство EFEST 1 A', 990, 'img/product/ЗУ.jpg', 6),
(26, 'Holy Sweet Strawberry Cheesecake 30ml', 'Клубничный чизкейк для подарка', 450, 'img/product/12.png', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `product-categories`
--

CREATE TABLE `product-categories` (
  `product_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `tel` varchar(32) NOT NULL,
  `request` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`id`, `name`, `email`, `tel`, `request`) VALUES
(1, 'Pavel', 'p.bashtovoy@mail.ru', '89538678922', 'Отличный товар'),
(2, 'Alexandr', 'test@gmail.com', '89238887766', 'Заказываю не первый раз в вашем магазине,все приходит вовремя'),
(3, 'Petr', 'test1@outlook.com', '88009598576', 'Покупкой доволен: цена-качество'),
(4, 'Vasya', 'Vasya1998@mail.ru', '89619993355', 'заказывал у вас зарядку, оказалась бракованной:('),
(5, 'Andrey', 'AIvanov@mail.ru', '89619993366', 'Магазин отличный, буду советовать друзьям ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `main_category` (`main_category`) USING BTREE;

--
-- Индексы таблицы `product-categories`
--
ALTER TABLE `product-categories`
  ADD PRIMARY KEY (`product_id`,`categories_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`main_category`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `product-categories`
--
ALTER TABLE `product-categories`
  ADD CONSTRAINT `product-categories_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
