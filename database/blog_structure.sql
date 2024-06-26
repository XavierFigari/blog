-- MySQL Script generated by MySQL Workbench
-- mer. 24 janv. 2024 08:57:22
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema blog
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `authors`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `authors` ;

CREATE TABLE IF NOT EXISTS `authors` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `firstName` VARCHAR(45) NULL,
  `pseudo` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `pseudo_UNIQUE` ON `authors` (`pseudo` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `posts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `posts` ;

CREATE TABLE IF NOT EXISTS `posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `content` VARCHAR(150) NULL,
  `pubDate` DATE NULL,
  `endDate` DATE NULL,
  `importance` INT NULL,
  `authors_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Articles_Authors1`
    FOREIGN KEY (`authors_id`)
    REFERENCES `authors` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Articles_Authors1_idx` ON `posts` (`authors_id` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `categories` ;

CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `catName` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `posts_categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `posts_categories` ;

CREATE TABLE IF NOT EXISTS `posts_categories` (
  `post_id` INT NOT NULL,
  `category_id` INT NOT NULL,
  PRIMARY KEY (`post_id`, `category_id`),
  CONSTRAINT `fk_Articles_has_Categories_Articles`
    FOREIGN KEY (`post_id`)
    REFERENCES `posts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Articles_has_Categories_Categories1`
    FOREIGN KEY (`category_id`)
    REFERENCES `categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Articles_has_Categories_Categories1_idx` ON `posts_categories` (`category_id` ASC) VISIBLE;

CREATE INDEX `fk_Articles_has_Categories_Articles_idx` ON `posts_categories` (`post_id` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `comments` ;

CREATE TABLE IF NOT EXISTS `comments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comment` MEDIUMTEXT NULL,
  `authors_id` INT NOT NULL,
  `posts_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Comments_Authors1`
    FOREIGN KEY (`authors_id`)
    REFERENCES `authors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comments_posts1`
    FOREIGN KEY (`posts_id`)
    REFERENCES `posts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Comments_Authors1_idx` ON `comments` (`authors_id` ASC) VISIBLE;

CREATE INDEX `fk_comments_posts1_idx` ON `comments` (`posts_id` ASC) VISIBLE;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
