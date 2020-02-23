--
-- PostgreSQL database dump
--

-- Dumped from database version 12.1 (Ubuntu 12.1-1.pgdg16.04+1)
-- Dumped by pg_dump version 12.2 (Ubuntu 12.2-1.pgdg18.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: links_id; Type: SEQUENCE; Schema: public; Owner: glnhdeyxszvvxe
--

CREATE SEQUENCE public.links_id
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.links_id OWNER TO glnhdeyxszvvxe;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: links; Type: TABLE; Schema: public; Owner: glnhdeyxszvvxe
--

CREATE TABLE public.links (
    id integer DEFAULT nextval('public.links_id'::regclass) NOT NULL,
    link text NOT NULL,
    name text,
    price text,
    currency character varying(5),
    image text,
    description character varying,
    json text,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL,
    created_by text
);


ALTER TABLE public.links OWNER TO glnhdeyxszvvxe;

--
-- Name: TABLE links; Type: COMMENT; Schema: public; Owner: glnhdeyxszvvxe
--

COMMENT ON TABLE public.links IS 'Collect Fabelio Product Link';


--
-- Data for Name: links; Type: TABLE DATA; Schema: public; Owner: glnhdeyxszvvxe
--

COPY public.links (id, link, name, price, currency, image, description, json, created_at, created_by) FROM stdin;
1	test	test	test	test	test	test	test	2020-02-23 13:07:24.356936	test
\.


--
-- Name: links_id; Type: SEQUENCE SET; Schema: public; Owner: glnhdeyxszvvxe
--

SELECT pg_catalog.setval('public.links_id', 1, true);


--
-- Name: links links_id_pk; Type: CONSTRAINT; Schema: public; Owner: glnhdeyxszvvxe
--

ALTER TABLE ONLY public.links
    ADD CONSTRAINT links_id_pk PRIMARY KEY (id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: glnhdeyxszvvxe
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO glnhdeyxszvvxe;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: LANGUAGE plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO glnhdeyxszvvxe;


--
-- PostgreSQL database dump complete
--

