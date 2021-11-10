CREATE TABLE `admin` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL , `support_email` VARCHAR(300) NOT NULL, `support_phone` VARCHAR(300) NOT NULL, `minimum_amount` VARCHAR(100) NOT NULL, `bitcoin_address` VARCHAR(100) NOT NULL, `ethereum_address` VARCHAR(100) NOT NULL,  PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `admin` (`id`, `username`, `password`, `support_email`, `minimum_amount`, `support_phone`) VALUES ('1', 'astroadmin', '977302936afc03b7637c7e0acd6273fd80a9898e01733251fa589d058206ee88', 'support@astroforextrading.com', '20', '+1 (913) 276-0376');

CREATE TABLE `users` ( `id` INT NOT NULL AUTO_INCREMENT , `full_name` VARCHAR(100) NOT NULL , `username` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `phone` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL ,`country` VARCHAR(100) NOT NULL , `account_balance` VARCHAR(100) NOT NULL , `earned_total` VARCHAR(100) NOT NULL , `total_withdrawal` VARCHAR(100) NOT NULL , `last_withdrawal` VARCHAR(100) NOT NULL , `pending_withdrawal` VARCHAR(100) NOT NULL , `active_deposit` VARCHAR(100) NOT NULL , `last_deposit` VARCHAR(100) NOT NULL , `total_deposit` VARCHAR(100) NOT NULL , `bitcoin_wallet_address` VARCHAR(100) NOT NULL , `ethereum_wallet_address` VARCHAR(100) NOT NULL , `ip_address` VARCHAR(100) NOT NULL ,`ref` VARCHAR(100) NOT NULL , `account_status` VARCHAR(2000) NOT NULL , `detect_ip` VARCHAR(50) NOT NULL , `detect_browser` VARCHAR(50) NOT NULL , `agree` VARCHAR(20) NOT NULL ,`login_count` INT(20) NOT NULL ,`registered_at` VARCHAR(100) NOT NULL ,`last_seen` VARCHAR(100) NOT NULL ,`no_of_referals` INT(50) NOT NULL ,`active_referals` INT(50) NOT NULL ,`total_referal_commission` VARCHAR(100) NOT NULL ,`count_down` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `feedback` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `time` VARCHAR(100) NOT NULL , `message` VARCHAR(3000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `history` ( `id` INT NOT NULL AUTO_INCREMENT , `u_id` INT(11) NOT NULL , `username` VARCHAR(100) NOT NULL , `type` VARCHAR(100) NOT NULL , `amount` VARCHAR(100) NOT NULL , `date` VARCHAR(100) NOT NULL , `status` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `deposit_list` ( `id` INT NOT NULL AUTO_INCREMENT , `u_id` INT(11) NOT NULL , `username` VARCHAR(100) NOT NULL , `type` VARCHAR(100) NOT NULL , `amount` VARCHAR(100) NOT NULL , `total_amount` VARCHAR(100) NOT NULL , `date` VARCHAR(100) NOT NULL , `create_timestamp` VARCHAR(100) NOT NULL , `last_update_timestamp` VARCHAR(100) NOT NULL , `status` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `withdrawal` ( `id` INT NOT NULL AUTO_INCREMENT , `u_id` INT(11) NOT NULL , `username` VARCHAR(100) NOT NULL , `type` VARCHAR(100) NOT NULL , `currency` VARCHAR(1000) NOT NULL , `withdrawal_amount` VARCHAR(100) NOT NULL, `btc_address` VARCHAR(100) NOT NULL , `date` VARCHAR(100) NOT NULL , `ip` VARCHAR(100) NOT NULL    , `status` VARCHAR(100) NOT NULL    , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `payments` ( `id` INT NOT NULL AUTO_INCREMENT , `u_id` INT(11) NOT NULL , `username` VARCHAR(100) NOT NULL , `type` VARCHAR(100) NOT NULL , `from_currency` VARCHAR(100) NOT NULL , `entered_amount` VARCHAR(100) NOT NULL, `to_currency` VARCHAR(100) NOT NULL , `amount` VARCHAR(100) NOT NULL , `gateway_id` VARCHAR(1000) NOT NULL    , `gateway_url` VARCHAR(500) NOT NULL    ,`hashcode` VARCHAR(500) NOT NULL    , `status` VARCHAR(100) NOT NULL    , `created_at` VARCHAR(100) NOT NULL    , `update_at` VARCHAR(100) NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `password_recovery` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(100) NOT NULL , `sr` VARCHAR(100) NOT NULL , `elapse_time` VARCHAR(100) NOT NULL ,`count` INT(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `user_verification` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(100) NOT NULL , `vr` VARCHAR(100) NOT NULL , `elapse_time` VARCHAR(100) NOT NULL ,`count` INT(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `payment_errors` ( `id` INT NOT NULL AUTO_INCREMENT , `$debug_email` VARCHAR(100) NOT NULL , `$report` VARCHAR(3000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;




INSERT INTO `deposit_list` (`id`, `u_id`, `username`, `type`, `amount`, `total_amount`, `date`, `create_timestamp`, `last_update_timestamp`, `status`) VALUES (NULL, '8', 'jontorres', '2', '18000', '18000', '27/11/2020', '1606431600', '1606431600', 'pending'), (NULL, '10', 'sou', '1', '12000', '12000', '05/12/2020', '1607122800', '1607122800', 'pending'), (NULL, '11', 'king', '4', '20000', '20000', '17/11/2020', '1605567600', '1605567600', 'pending'), (NULL, '12', 'maru', '3', '50000', '50000', '25/11/2020', '1606258800', '1606258800', 'pending');


INSERT INTO `history` (`id`, `u_id`, `username`, `type`, `amount`, `date`, `status`) VALUES (NULL, '8', 'jontorres', 'Deposit', '18000', '27-11-2020', 'pending'), (NULL, '10', 'sou', 'Deposit', '12000', '05-12-2020', 'pending'), (NULL, '11', 'king', 'Deposit', '20000', '17-11-2020', 'pending'), (NULL, '12', 'maru', 'Deposit', '50000', '25-11-2020', 'pending');