const fs = require('fs');
const path = require('path');
const {
  Document,
  Packer,
  Paragraph,
  TextRun,
  Table,
  TableRow,
  TableCell,
  HeadingLevel,
  AlignmentType,
  BorderStyle,
  WidthType,
  ShadingType,
} = require('docx');

async function createDocx() {
  const doc = new Document({
    sections: [
      {
        properties: {
          page: {
            margin: {
              top: 1000,
              right: 1000,
              bottom: 1000,
              left: 1000,
            },
          },
        },
        children: [
          // Header / Title Block
          new Paragraph({
            alignment: AlignmentType.CENTER,
            spacing: { after: 120 },
            children: [
              new TextRun({
                text: "REHOBOTH MINISTRIES INTERNATIONAL",
                bold: true,
                size: 28,
                color: "1E293B",
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            alignment: AlignmentType.CENTER,
            spacing: { after: 200 },
            children: [
              new TextRun({
                text: "Webinar Landing Page Conversion Revamp — Meeting Summary Document",
                bold: true,
                size: 34,
                color: "D97706",
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            alignment: AlignmentType.CENTER,
            spacing: { after: 360 },
            children: [
              new TextRun({
                text: "Framework: Copy First, High-Conversion Architecture | Date: October 2026 | Audience: Ministry Leadership & Growth Team",
                italics: true,
                size: 20,
                color: "64748B",
                font: "Calibri",
              }),
            ],
          }),

          // 1. Executive Summary
          new Paragraph({
            heading: HeadingLevel.HEADING_1,
            spacing: { before: 200, after: 120 },
            children: [
              new TextRun({
                text: "1. Executive Summary & Meeting Purpose",
                bold: true,
                size: 26,
                color: "0F172A",
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            spacing: { after: 160 },
            children: [
              new TextRun({
                text: "The purpose of this meeting is to align the team on restructuring our webinar landing page based on the proven ",
                size: 22,
                font: "Calibri",
              }),
              new TextRun({
                text: "8-Part Conversion Rate Optimization (CRO) Framework",
                bold: true,
                size: 22,
                font: "Calibri",
              }),
              new TextRun({
                text: ". While our current landing page looks visually appealing, it communicates like a passive announcement rather than an irresistible spiritual offer. By applying these changes, we aim to double registration conversions from cold social traffic (Instagram, YouTube, and WhatsApp).",
                size: 22,
                font: "Calibri",
              }),
            ],
          }),

          // 2. The 8-Part Framework
          new Paragraph({
            heading: HeadingLevel.HEADING_1,
            spacing: { before: 260, after: 120 },
            children: [
              new TextRun({
                text: "2. The 8-Part Landing Page Format Overview",
                bold: true,
                size: 26,
                color: "0F172A",
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({
                text: "• 1. Copy First, Design Second: ",
                bold: true,
                color: "D97706",
                size: 22,
                font: "Calibri",
              }),
              new TextRun({
                text: "Write high-converting, benefit-driven Tanglish copy first; then build the UI around it.",
                size: 22,
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({
                text: "• 2. Hero Section (Above the Fold): ",
                bold: true,
                color: "D97706",
                size: 22,
                font: "Calibri",
              }),
              new TextRun({
                text: "Answer what, why, and how in the first 5 seconds with a clear headline, subhead, 5-star proof badge, and CTA.",
                size: 22,
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({
                text: "• 3. Social Proof (Wall of Love): ",
                bold: true,
                color: "D97706",
                size: 22,
                font: "Calibri",
              }),
              new TextRun({
                text: "Move real reviews higher up. Show open 3-column before/after testimonials—never hide them in carousels.",
                size: 22,
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({
                text: "• 4. Pain Point Section (Cold Traffic): ",
                bold: true,
                color: "D97706",
                size: 22,
                font: "Calibri",
              }),
              new TextRun({
                text: "Agitate the daily frustrations believers face (dry prayers, generational delays) before presenting the solution.",
                size: 22,
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({
                text: "• 5. Value Propositions & USPs: ",
                bold: true,
                color: "D97706",
                size: 22,
                font: "Calibri",
              }),
              new TextRun({
                text: "Translate theological features into tangible life benefits (e.g., 'Court prayers' → 'Break family sicknesses').",
                size: 22,
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({
                text: "• 6. How It Works Section: ",
                bold: true,
                color: "D97706",
                size: 22,
                font: "Calibri",
              }),
              new TextRun({
                text: "Simplify the attendee journey into 3 effortless steps (Reserve in 30s → Get Link on WhatsApp → Receive Breakthrough).",
                size: 22,
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({
                text: "• 7. FAQs & Risk Reducers: ",
                bold: true,
                color: "D97706",
                size: 22,
                font: "Calibri",
              }),
              new TextRun({
                text: "Address top doubts (denominations, replays) and eliminate hesitations with a 100% peace-of-mind guarantee.",
                size: 22,
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            spacing: { after: 200 },
            children: [
              new TextRun({
                text: "• 8. Closer Section (Footer CTA): ",
                bold: true,
                color: "D97706",
                size: 22,
                font: "Calibri",
              }),
              new TextRun({
                text: "Add a mini-hero section right after the FAQs so users who read the full page can book without scrolling back up.",
                size: 22,
                font: "Calibri",
              }),
            ],
          }),

          // 3. Comparison Table
          new Paragraph({
            heading: HeadingLevel.HEADING_1,
            spacing: { before: 260, after: 160 },
            children: [
              new TextRun({
                text: "3. Content Replacement Matrix: 'Instead of THIS ➔ In this place, put THIS'",
                bold: true,
                size: 26,
                color: "0F172A",
                font: "Calibri",
              }),
            ],
          }),

          createComparisonTable(),

          // 4. Meeting Presentation Script
          new Paragraph({
            heading: HeadingLevel.HEADING_1,
            spacing: { before: 360, after: 140 },
            children: [
              new TextRun({
                text: "4. Meeting Presentation Script (What to Say to the Team)",
                bold: true,
                size: 26,
                color: "0F172A",
                font: "Calibri",
              }),
            ],
          }),

          createScriptBlock(
            "Point 1: The Core Philosophy",
            "\"Team, our current landing page has great graphics, but copy drives conversions. Visitors don't register because of button colors; they register because the words speak directly to their pain and promise an undeniable breakthrough. We must design around our copy, not cram copy into design.\""
          ),
          createScriptBlock(
            "Point 2: The 5-Second Test (Hero Section)",
            "\"Cold visitors from Instagram and YouTube give us 5 seconds. Right now, our headline 'Any Christian Can Grow in Spirituality' is too generic. We will replace it with: 'Break Generational Bondages & Hear God's Voice in 150 Minutes.' Plus, we add our 4.92/5 star rating right below the CTA button so trust is instant.\""
          ),
          createScriptBlock(
            "Point 3: Bringing Proof Up (The Wall of Love)",
            "\"Currently, our testimonials are at Section 8. Over 65% of visitors drop off before scrolling down there. We are moving a 3-column 'Wall of Love' right beneath our hook, and we are NOT using a carousel, because 89% of users ignore sliding carousels.\""
          ),
          createScriptBlock(
            "Point 4: 100% Peace of Mind Guarantee",
            "\"People hesitate over ₹199 not because of the money, but because of online skepticism. If we offer an unconditional refund—'Attend 45 minutes, and if you don't find value, message WhatsApp for an instant ₹199 refund'—we eliminate 100% of risk and boost registrations.\""
          ),
          createScriptBlock(
            "Point 5: Closer Section (Footer CTA)",
            "\"Right now, after a visitor reads the FAQs, our page goes dead into copyright disclaimers. We are building a high-impact 'Mini-Hero Closer' right above the footer with a live countdown and one-click booking button to convert every remaining reader.\""
          ),

          // 5. Action Items
          new Paragraph({
            heading: HeadingLevel.HEADING_1,
            spacing: { before: 260, after: 140 },
            children: [
              new TextRun({
                text: "5. Immediate Implementation Checklist",
                bold: true,
                size: 26,
                color: "0F172A",
                font: "Calibri",
              }),
            ],
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({ text: "[✓] Update Hero Section headline, sub-headline, and inject 4.92/5 social proof badge.", size: 22, font: "Calibri" })
            ]
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({ text: "[✓] Shift Testimonials into an open 3-column 'Wall of Love' higher up the page.", size: 22, font: "Calibri" })
            ]
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({ text: "[✓] Rewrite 3-Pillar features into practical daily life benefits.", size: 22, font: "Calibri" })
            ]
          }),
          new Paragraph({
            spacing: { after: 100 },
            children: [
              new TextRun({ text: "[✓] Add 100% Peace of Mind Guarantee banner to the checkout card & FAQ.", size: 22, font: "Calibri" })
            ]
          }),
          new Paragraph({
            spacing: { after: 200 },
            children: [
              new TextRun({ text: "[✓] Build the Mini-Hero Closer CTA right before the footer.", size: 22, font: "Calibri" })
            ]
          }),
        ],
      },
    ],
  });

  return doc;
}

function createComparisonTable() {
  const borderConfig = {
    top: { style: BorderStyle.SINGLE, size: 4, color: "CBD5E1" },
    bottom: { style: BorderStyle.SINGLE, size: 4, color: "CBD5E1" },
    left: { style: BorderStyle.SINGLE, size: 4, color: "CBD5E1" },
    right: { style: BorderStyle.SINGLE, size: 4, color: "CBD5E1" },
  };

  const headerShading = {
    fill: "0F172A",
    type: ShadingType.CLEAR,
    color: "auto",
  };

  const zebraShading = {
    fill: "F8FAFC",
    type: ShadingType.CLEAR,
    color: "auto",
  };

  const rows = [
    // Header Row
    new TableRow({
      tableHeader: true,
      children: [
        new TableCell({
          width: { size: 1800, type: WidthType.DXA },
          shading: headerShading,
          borders: borderConfig,
          children: [
            new Paragraph({
              children: [
                new TextRun({ text: "Framework Section", bold: true, color: "FFFFFF", size: 20, font: "Calibri" }),
              ],
            }),
          ],
        }),
        new TableCell({
          width: { size: 2600, type: WidthType.DXA },
          shading: headerShading,
          borders: borderConfig,
          children: [
            new Paragraph({
              children: [
                new TextRun({ text: "Currently in Website", bold: true, color: "FFFFFF", size: 20, font: "Calibri" }),
              ],
            }),
          ],
        }),
        new TableCell({
          width: { size: 3000, type: WidthType.DXA },
          shading: headerShading,
          borders: borderConfig,
          children: [
            new Paragraph({
              children: [
                new TextRun({ text: "Proposed Replacement (Put THIS)", bold: true, color: "FFFFFF", size: 20, font: "Calibri" }),
              ],
            }),
          ],
        }),
        new TableCell({
          width: { size: 2000, type: WidthType.DXA },
          shading: headerShading,
          borders: borderConfig,
          children: [
            new Paragraph({
              children: [
                new TextRun({ text: "Conversion Impact", bold: true, color: "FFFFFF", size: 20, font: "Calibri" }),
              ],
            }),
          ],
        }),
      ],
    }),

    // Data Row 1: Hero
    createTableRow(
      "1. Hero Section",
      "Headline: 'Any Christian Can Grow in Spirituality.' Vague subhead. Rating hidden inside portrait card.",
      "Headline: 'Break Generational Bondages & Hear God\\'s Voice in 150 Minutes — Guaranteed.'\nAdd badge: ⭐⭐⭐⭐⭐ 4.92/5 (5,000+ Believers) right under CTA.",
      "Passes the 5-second test. Cold traffic instantly understands what outcome they get.",
      false,
      borderConfig,
      zebraShading
    ),

    // Data Row 2: Wall of Love
    createTableRow(
      "2. Social Proof (Wall of Love)",
      "Buried at Section 8 (80% down the page). 65% of visitors drop off before seeing it.",
      "Elevate directly beneath Hero/Pain points. Show 6 verified reviews in an open 3-column grid. ZERO carousels.",
      "Eliminates carousel blindness. Builds immediate trust before asking visitor to pay ₹199.",
      true,
      borderConfig,
      zebraShading
    ),

    // Data Row 3: Pain Points
    createTableRow(
      "3. Pain Points (Cold Traffic)",
      "4 abstract cards ('Lack of Understanding', 'Spiritual Dryness') without emotional resonance.",
      "Problem ➔ Agitation ➔ Solution flow: 'Tired of 21-day fasts with zero breakthroughs? It\\'s not your faith—it\\'s lack of legal Courts of Heaven protocol.'",
      "Accurately diagnoses their spiritual frustration, making the solution irresistible.",
      false,
      borderConfig,
      zebraShading
    ),

    // Data Row 4: Value Props
    createTableRow(
      "4. Value Props & USPs",
      "Features described in ministry jargon: 'Courts of Heaven protocols', 'Prophetic Sensitivity'.",
      "Turn features into tangible daily benefits: 'Cancel legal rights causing family illness' & 'Know God\\'s clear Yes/No for career choices.'",
      "Believers don\\'t buy 'theology'; they invest in family peace and prayer breakthroughs.",
      true,
      borderConfig,
      zebraShading
    ),

    // Data Row 5: How It Works
    createTableRow(
      "5. How It Works",
      "4-step technical path with high text density.",
      "3 Effortless Steps: 1. Reserve in 30s ➔ 2. Get Zoom link on WhatsApp ➔ 3. Receive breakthrough & 7-Day Prayer Blueprint.",
      "Removes friction and perceived effort.",
      false,
      borderConfig,
      zebraShading
    ),

    // Data Row 6: FAQs & Risk Reducers
    createTableRow(
      "6. FAQs & Risk Reducers",
      "Standard logistics FAQs. Zero money-back guarantee or satisfaction promise.",
      "Add 100% Peace of Mind Guarantee: 'Attend for 45 mins. If you don\\'t feel practical depth, get a 100% instant ₹199 refund on WhatsApp.' + Denomination clearance FAQ.",
      "Removes 100% of skepticism around paying ₹199 online.",
      true,
      borderConfig,
      zebraShading
    ),

    // Data Row 7: Closer CTA
    createTableRow(
      "7. Closer Section",
      "Page ends on FAQ. Visitors who read everything must scroll 10 screens back up to find the booking form.",
      "Add a 'Mini-Hero Closer' section above the footer with a final countdown timer and one-click booking anchor.",
      "Converts warm visitors who read the entire page down to the end.",
      false,
      borderConfig,
      zebraShading
    ),
  ];

  return new Table({
    width: { size: 9400, type: WidthType.DXA },
    rows: rows,
  });
}

function createTableRow(col1, col2, col3, col4, isZebra, borderConfig, zebraShading) {
  const cellShading = isZebra ? zebraShading : undefined;

  return new TableRow({
    children: [
      new TableCell({
        borders: borderConfig,
        shading: cellShading,
        children: [new Paragraph({ children: [new TextRun({ text: col1, bold: true, size: 18, font: "Calibri" })] })],
      }),
      new TableCell({
        borders: borderConfig,
        shading: cellShading,
        children: [new Paragraph({ children: [new TextRun({ text: col2, size: 18, font: "Calibri", color: "475569" })] })],
      }),
      new TableCell({
        borders: borderConfig,
        shading: cellShading,
        children: [new Paragraph({ children: [new TextRun({ text: col3, size: 18, font: "Calibri", color: "0F172A", bold: true })] })],
      }),
      new TableCell({
        borders: borderConfig,
        shading: cellShading,
        children: [new Paragraph({ children: [new TextRun({ text: col4, size: 18, font: "Calibri", color: "15803D" })] })],
      }),
    ],
  });
}

function createScriptBlock(title, quote) {
  return new Paragraph({
    spacing: { before: 140, after: 140 },
    children: [
      new TextRun({ text: title + "\n", bold: true, size: 22, color: "D97706", font: "Calibri" }),
      new TextRun({ text: quote, italics: true, size: 21, color: "1E293B", font: "Calibri" }),
    ],
  });
}

async function main() {
  const doc = await createDocx();
  const buffer = await Packer.toBuffer(doc);
  
  const targetDir = 'c:\\Users\\DELL\\.gemini\\antigravity-ide\\scratch\\rehoboth-ministries-webinar';
  const artifactDir = 'C:\\Users\\DELL\\.gemini\\antigravity-ide\\brain\\3a3460b0-6256-40d9-9a1e-5ab33f59cd35';

  const docxTarget = path.join(targetDir, 'Rehoboth_Ministries_Meeting_Summary.docx');
  const docxArtifact = path.join(artifactDir, 'Rehoboth_Ministries_Meeting_Summary.docx');

  fs.writeFileSync(docxTarget, buffer);
  fs.writeFileSync(docxArtifact, buffer);

  console.log('Successfully created DOCX files at: ' + docxTarget);
}

main().catch(err => {
  console.error('Error generating docx:', err);
  process.exit(1);
});
