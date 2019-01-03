CREATE TABLE public.kom_user (
    id integer NOT NULL,
    fullname text NOT NULL,
    username character(30) NOT NULL,
    password text NOT NULL
);


ALTER TABLE public.kom_user OWNER TO agus;

--
-- Name: TABLE kom_user; Type: COMMENT; Schema: public; Owner: agus
--

COMMENT ON TABLE public.kom_user IS 'tabel user';


--
-- Name: kom_user kom_user_pkey; Type: CONSTRAINT; Schema: public; Owner: agus
--

ALTER TABLE ONLY public.kom_user
    ADD CONSTRAINT kom_user_pkey PRIMARY KEY (id);
