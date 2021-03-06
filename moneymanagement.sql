PGDMP     2                    y            moneymanagement    13.2    13.2     ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    25599    moneymanagement    DATABASE     o   CREATE DATABASE moneymanagement WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_Indonesia.1252';
    DROP DATABASE moneymanagement;
                postgres    false            ?            1259    25746    credit    TABLE     T   CREATE TABLE public.credit (
    email character varying(250),
    credit bigint
);
    DROP TABLE public.credit;
       public         heap    postgres    false            ?            1259    25734 
   moneytable    TABLE     ?   CREATE TABLE public.moneytable (
    id integer NOT NULL,
    transaction character varying(50) NOT NULL,
    amount bigint NOT NULL,
    date date,
    category character varying(15),
    "inout" character varying(8),
    email character varying(250)
);
    DROP TABLE public.moneytable;
       public         heap    postgres    false            ?            1259    25732    moneytable_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.moneytable_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.moneytable_id_seq;
       public          postgres    false    201            ?           0    0    moneytable_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.moneytable_id_seq OWNED BY public.moneytable.id;
          public          postgres    false    200            ?            1259    25738    user    TABLE     ?   CREATE TABLE public."user" (
    name character varying(250),
    email character varying(250) NOT NULL,
    password character varying(250)
);
    DROP TABLE public."user";
       public         heap    postgres    false            +           2604    25737    moneytable id    DEFAULT     n   ALTER TABLE ONLY public.moneytable ALTER COLUMN id SET DEFAULT nextval('public.moneytable_id_seq'::regclass);
 <   ALTER TABLE public.moneytable ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    200    201    201            ?          0    25746    credit 
   TABLE DATA           /   COPY public.credit (email, credit) FROM stdin;
    public          postgres    false    203   ?       ?          0    25734 
   moneytable 
   TABLE DATA           ]   COPY public.moneytable (id, transaction, amount, date, category, "inout", email) FROM stdin;
    public          postgres    false    201   	       ?          0    25738    user 
   TABLE DATA           7   COPY public."user" (name, email, password) FROM stdin;
    public          postgres    false    202   *       ?           0    0    moneytable_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.moneytable_id_seq', 9, true);
          public          postgres    false    200            -           2606    25745 
   user email 
   CONSTRAINT     M   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT email PRIMARY KEY (email);
 6   ALTER TABLE ONLY public."user" DROP CONSTRAINT email;
       public            postgres    false    202            ?   4   x?+??K?IqH?M???K???44522200?J?OJ?D?0646
??qqq ???      ?     x????N?0??<E_???y眛b?\F6o?)PI]i??I??e?f?#?????????;'?DONr?Ip>!???	?TP?B&K?0?JRQ???b??x!?G^????=???D??0,??????|ԙ-Ӓ????jg?3Ť'"????R?]1l?0???? "AO??? ?Ѯb?r* ??I?4?%$?f?]?O???-Wr?"?8??R.?.l\??n????r?5??<??R??haS?g;HO[\?h$t??|?E?l???`|??!?6?<?,\?!      ?   p   x?M?1?0F?9>'??6?͆XؙY??Bj????L,O??wo?-????v????s???y[?Xe????G ??O?jе??o?6+?=??(?gQ??2;&VУ#?͒%?     