---
marp: true
theme: default
size: 16:9
paginate: true

style: |
  section {
    background: #FFFFFF;
    color: #333333;
    font-family: Arial, sans-serif;
    padding: 50px 65px;
    font-size: 23px;
  }

  h1 {
    color: #1D4ED8;
    font-size: 38px;
    font-weight: 700;
  }

  h2 {
    color: #2563EB;
    font-size: 27px;
  }

  h3 {
    color: #1E40AF;
  }

  strong {
    color: #1D4ED8;
  }

  section.title {
    text-align: center;
    justify-content: center;
    background: #FFFFFF;
  }

  section.title h1 {
    color: #1D4ED8;
    font-size: 48px;
  }

  section.title h2 {
    color: #334155;
    font-size: 28px;
  }

  section.title p {
    color: #475569;
  }

  section::after {
    color: #64748B;
    font-size: 14px;
  }
---

<!-- _class: title -->
![OFPPT](images/logo-ofppt.png) ![Solicode](images/logo-solicode.png)

# LES BASES DU PROMPT ENGINEERING

## Apprendre à écrire de bons prompts

**Réalisé par :** Medkour Ibrahim

**Encadré par :** ES-Saraj Fouad

**Centre :** SoliCode Tanger

**Projet :** Labs d'apprentissage

---

# 1. Plan de la présentation

1. **Introduction :** Découvrir le Prompt Engineering.
2. **Stack technique :** Présenter les outils utilisés.
3. **Définitions :** Comprendre les mots importants.
4. **Problème et besoin :** Comprendre pourquoi un bon prompt est nécessaire.
5. **Solution et pratique :** Découvrir et appliquer les méthodes.
6. **Résultats et conclusion :** Présenter les résultats et les connaissances acquises.

---

# 2. Stack technique

Les outils utilisés pour réaliser ce Lab :

| Outil | Rôle |
|---|---|
| **ChatGPT** | Écrire et tester des prompts. |
| **Microsoft Copilot** | Tester des demandes à une IA. |
| **Visual Studio Code** | Rédiger et organiser le document. |
| **Markdown** | Écrire le contenu de la présentation. |
| **Marp** | Transformer Markdown en présentation. |

**Objectif :** Utiliser des outils simples pour apprendre et pratiquer le Prompt Engineering.

---

# 3. Définitions

- **Intelligence artificielle (IA) :** Technologie qui peut réaliser des tâches avec des instructions et des données.
- **Prompt :** Demande écrite à une intelligence artificielle.
- **Prompt Engineering :** Méthode pour écrire et améliorer des prompts.
- **RTF :** Méthode basée sur le Rôle, la Tâche et le Format.
- **IPO :** Méthode basée sur l'Entrée, le Traitement et la Sortie.
- **CRISPE :** Méthode pour donner plus de détails à un prompt.
- **Few-Shot :** Méthode qui utilise des exemples pour guider l'IA.

---

# 4. Problème et besoin

### Problème

- Les demandes simples peuvent manquer de détails.
- L'IA peut donner une réponse trop générale.
- La réponse peut ne pas correspondre au besoin de l'utilisateur.

### Besoin

- Écrire des demandes claires et précises.
- Donner le contexte nécessaire à l'IA.
- Obtenir des réponses adaptées à son objectif.

### Exemple

**Prompt simple :**

« Explique Laravel. »

**Problème :** La demande ne précise pas le niveau ni le type d'explication souhaité.

---

# 5. Solution et pratique

### A. La méthode RTF

- **R – Rôle :** Tu es un formateur Laravel.
- **T – Tâche :** Explique les migrations Laravel.
- **F – Format :** Utilise cinq étapes et un exemple de code.

### B. La méthode IPO

- **Input :** Je connais PHP, mais je débute avec Laravel.
- **Process :** Explique les migrations et les étapes pour créer une table.
- **Output :** Donne une explication simple avec un exemple de code.

### C. La méthode CRISPE

- **Capacity :** Tu connais bien Laravel.
- **Role :** Tu es un formateur.
- **Insight :** Les apprenants connaissent PHP.
- **Statement :** Prépare un exercice sur les migrations.
- **Personality :** Utilise des mots simples.
- **Experiment :** Propose deux exercices de niveaux différents.

---

# 5. Solution et pratique

### D. Few-Shot Prompting

**Exemple donné à l'IA :**

« Créer une tâche : Ajouter une catégorie. Description : Permettre à l'administrateur d'ajouter une catégorie. »

**Nouvelle demande :**

« Crée une tâche pour ajouter un produit avec la même organisation et le même style. »

L'IA utilise le premier exemple pour préparer le nouveau résultat.

### E. Tester et améliorer un prompt

1. Écrire le prompt.
2. Tester avec ChatGPT.
3. Lire la réponse.
4. Corriger le prompt.
5. Tester une nouvelle fois.

**Exemple :**

Prompt initial : « Explique une erreur Laravel. »

Amélioration : « Explique cette erreur Laravel à un débutant. Utilise des mots simples et donne un exemple. »

### Vérification

Toujours vérifier les informations et le code générés par l'IA.

---

# 6. Résultats et conclusion

### Résultats

- Découverte de plusieurs méthodes de Prompt Engineering.
- Création de prompts avec RTF, IPO et CRISPE.
- Utilisation de Few-Shot avec des exemples.
- Test et amélioration des demandes.

### Ce que j'ai appris

- Écrire des prompts clairs et précis.
- Donner un contexte à l'IA.
- Choisir une méthode selon le besoin.
- Vérifier les réponses de l'IA.

### Conclusion

Le Prompt Engineering permet de mieux communiquer avec l'intelligence artificielle.

Un bon prompt aide à obtenir une réponse plus adaptée à son besoin.
