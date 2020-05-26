CREATE DATABASE ipo15diploma CHARACTER SET utf8 COLLATE utf8_general_ci;
/*
http://www.cyberforum.ru/php-database/thread198468.html
http://www.cyberforum.ru/php-database/thread1079765.html
*/
use ipo15diploma;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
/*Структура таблицы: Пользователей*/
CREATE TABLE `db_users` (
  `db_user_profile_id` int(11) unsigned NOT NULL COMMENT 'ID' auto_increment,
  `db_user_login` varchar(255) NOT NULL COMMENT 'Логин',
  `db_user_surname` varchar(255) NOT NULL COMMENT 'Фамилия',
  `db_user_name` varchar(255) NOT NULL COMMENT 'Имя',
  `db_user_patronymic` varchar(255) NOT NULL COMMENT 'Отчество',
  `db_user_passport_series` varchar(255) NOT NULL COMMENT 'Паспорт Серия',
  `db_user_passport_number` varchar(255) NOT NULL COMMENT 'Паспорт Номер',
  `db_user_house_number` varchar(255) NOT NULL COMMENT 'Номер Дома',
  `db_user_apartment_number` varchar(255) NOT NULL COMMENT 'Номер Квартиры',
  `db_user_residential_address` varchar(255) NOT NULL COMMENT 'Адрес проживания',
  `db_user_personal_account_number` varchar(255) NOT NULL COMMENT 'Номер лицевого счёта',
  `db_user_quantity_citizens_registered_at` varchar(255) NOT NULL COMMENT 'Количество граждан, зарегистрированных по адресу',
  `db_user_quantity_citizens_registered_fees` varchar(255) NOT NULL COMMENT 'Количество граждан, на которых осуществляется начисление платы за коммунальные услуги/фактически проживающих',
  `db_user_type_property` varchar(255) NOT NULL COMMENT 'Вид собственности',
  `db_user_total_area_premises` varchar(255) NOT NULL COMMENT 'Общая площадь помещений по лицевому счёту',
  `db_user_amount_payment_residential_premises` varchar(255) NOT NULL COMMENT 'Размер платы за жилое помещение',
  `db_user_contact_phone_number` varchar(255) NOT NULL COMMENT 'Контактный телефон',
  `db_user_contact_email` varchar(255) NOT NULL COMMENT 'Контактный E-mail',
  `db_user_password` varchar(255) NOT NULL COMMENT 'Пароль',
  `db_user_registration_date` DATETIME  NOT NULL COMMENT 'Дата регистрации в системе',
  PRIMARY KEY (`db_user_profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*Структура таблицы: Тариф*/
CREATE TABLE `db_tarif` (
  `db_tarif_id` int(11) unsigned NOT NULL COMMENT 'ID' auto_increment,
  `db_tarif_plata_z_z_p_new` varchar(255) NOT NULL COMMENT 'Плата за жилое помещение (NEW)',
  `db_tarif_plata_z_z_p_old` varchar(255) NOT NULL COMMENT 'Плата за жилое помещение (OLD)',
  `db_tarif_kholodnoye_v_new` varchar(255) NOT NULL COMMENT 'ХВС (NEW)',
  `db_tarif_kholodnoye_v_old` varchar(255) NOT NULL COMMENT 'ХВС (OLD)',
  `db_tarif_otvedeniye_s_v_new` varchar(255) NOT NULL COMMENT 'Отведение сточных вод (NEW)',
  `db_tarif_otvedeniye_s_v_old` varchar(255) NOT NULL COMMENT 'Отведение сточных вод (OLD)',
  `db_tarif_gvs_cude_new` varchar(255) NOT NULL COMMENT 'ГВС (куб. м) (NEW)',
  `db_tarif_gvs_cude_old` varchar(255) NOT NULL COMMENT 'ГВС (куб. м) (OLD)',
  `db_tarif_gvs_gkal_new` varchar(255) NOT NULL COMMENT 'ГВС (Гкал) (NEW)',
  `db_tarif_gvs_gkal_old` varchar(255) NOT NULL COMMENT 'ГВС (Гкал) (OLD)',
  `db_tarif_otopleniye_new` varchar(255) NOT NULL COMMENT 'Отопление (NEW)',
  `db_tarif_otopleniye_old` varchar(255) NOT NULL COMMENT 'Отопление (OLD)',
  `db_tarif_update_date_new` DATETIME  NOT NULL COMMENT 'Дата обновления (NEW)',
  PRIMARY KEY (`db_tarif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*Структура таблицы: Норматив*/
CREATE TABLE `db_normativ` (
  `db_normativ_id` int(11) unsigned NOT NULL COMMENT 'ID' auto_increment,
  `db_normativ_kholodnoye_v_new` varchar(255) NOT NULL COMMENT 'ХВС (NEW)',
  `db_normativ_kholodnoye_v_old` varchar(255) NOT NULL COMMENT 'ХВС (OLD)',
  `db_normativ_otvedeniye_s_v_new` varchar(255) NOT NULL COMMENT 'Отведение сточных вод (NEW)',
  `db_normativ_otvedeniye_s_v_old` varchar(255) NOT NULL COMMENT 'Отведение сточных вод (OLD)',
  `db_normativ_gvs_cude_new` varchar(255) NOT NULL COMMENT 'ГВС (куб. м) (NEW)',
  `db_normativ_gvs_cude_old` varchar(255) NOT NULL COMMENT 'ГВС (куб. м) (OLD)',
  `db_normativ_gvs_gkal_new` varchar(255) NOT NULL COMMENT 'ГВС (Гкал) (NEW)',
  `db_normativ_gvs_gkal_old` varchar(255) NOT NULL COMMENT 'ГВС (Гкал) (OLD)',
  `db_normativ_otopleniye_new` varchar(255) NOT NULL COMMENT 'Отопление (NEW)',
  `db_normativ_otopleniye_old` varchar(255) NOT NULL COMMENT 'Отопление (OLD)',
  `db_normativ_update_date_new` DATETIME  NOT NULL COMMENT 'Дата обновления (NEW)',
  PRIMARY KEY (`db_normativ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*Структура таблицы: Состояние Cчётчиков*/
CREATE TABLE `db_meter` (
  `db_penance_id` int(11) unsigned NOT NULL COMMENT 'ID' auto_increment,
  `db_penance_login` varchar(255) NOT NULL COMMENT 'Логин того кто передал показания',
  `db_penance_kholodnoye_v_new` varchar(255) NOT NULL COMMENT 'Показания ХВС (NEW)',
  `db_penance_kholodnoye_v_old` varchar(255) NOT NULL COMMENT 'Показания ХВС (OLD)',
  `db_penance_gvs_cude_new` varchar(255) NOT NULL COMMENT 'Показания ГВС (NEW)',
  `db_penance_gvs_cude_old` varchar(255) NOT NULL COMMENT 'Показания ГВС (OLD)',
  `db_penance_processing` int(11) NOT NULL COMMENT 'Показания в обработке (1-обработано/0-не обработано)',
  `db_penance_date` DATETIME  NOT NULL COMMENT 'Дата показаний',
  `db_penance_transfer` DATETIME NULL DEFAULT NULL COMMENT 'Дата передачи',
  PRIMARY KEY (`db_penance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*Структура таблицы: Расчет платежа по коммунальным услугам*/
CREATE TABLE `db_payment` (
  `db_payment_id` int(11) unsigned NOT NULL COMMENT 'ID' auto_increment,
  `db_payment_year` varchar(255) NOT NULL COMMENT 'Год',
  `db_payment_month` varchar(255) NOT NULL COMMENT 'Месяц',
  `db_payment_login` varchar(255) NOT NULL COMMENT 'Логин',
  `db_payment_payer` varchar(255) NOT NULL COMMENT 'Плательщик',
  `db_payment_address` varchar(255) NOT NULL COMMENT 'Адрес',
  `db_payment_personal_account` varchar(255) NOT NULL COMMENT 'Лицевой счет',
  `db_payment_total_area_premises` varchar(255) NOT NULL COMMENT 'Общая площадь помещений по лицевому счету',
  `db_payment_family_composition` varchar(255) NOT NULL COMMENT 'Состав семьи',
  `db_payment_benefit_recipien` varchar(255) NOT NULL COMMENT 'Льготников',
  `db_payment_GW` varchar(255) NOT NULL COMMENT 'ГВ (переданные показания)',
  `db_payment_ХВ` varchar(255) NOT NULL COMMENT 'ХВ (переданные показания)',
  `db_payment_sod_housing` varchar(255) NOT NULL COMMENT 'Сод. Жилья (Плата за жилое помещение)',
  `db_payment_HVS` varchar(255) NOT NULL COMMENT 'ХВС',
  `db_payment_otvedeniye_s_v` varchar(255) NOT NULL COMMENT 'Отведение сточных вод (Канализация)',
  `db_payment_GVS` varchar(255) NOT NULL COMMENT 'ГВС',
  `db_payment_sotopleniye` varchar(255) NOT NULL COMMENT 'Отопление',
  `db_payment_TKO` varchar(255) NOT NULL COMMENT 'ТКО',
  `db_payment_TKO_ODN` varchar(255) NOT NULL COMMENT 'ХВС/ОДН',
  `db_payment_otvedeniye_s_v_ODN` varchar(255) NOT NULL COMMENT 'Отведение сточных вод/ОДН',
  `db_payment_GVS_ODN` varchar(255) NOT NULL COMMENT 'ГВС/ОДН',
  `db_payment_total` varchar(255) NOT NULL COMMENT 'Итог (Сумма)',
  `db_payment_Бухгалтер` varchar(255) NOT NULL COMMENT 'Бухгалтер (ФИО)',
  `db_payment_date_payment` DATETIME NULL DEFAULT NULL COMMENT 'Дата формирования платежки',
  PRIMARY KEY (`db_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*Структура таблицы: Аудит событий*/
CREATE TABLE `db_event_audit` (
  `db_event_audit_id` int(11) unsigned NOT NULL COMMENT 'ID' auto_increment,
  `db_event_audit_login` varchar(255) NOT NULL COMMENT 'Пользователь',
  `db_event_audit_session_start_date` varchar(255) NOT NULL COMMENT 'Дата начала сеанса',
  `db_event_audit_session_end_date` varchar(255) NOT NULL COMMENT 'Дата конца сеанса',
  `db_event_audit_session_time` varchar(255) NOT NULL COMMENT 'Время сеанса',
  PRIMARY KEY (`db_event_audit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
